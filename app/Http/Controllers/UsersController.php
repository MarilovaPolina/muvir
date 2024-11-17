<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class UsersController extends Controller
{
    public function delete(Request $request) {
        $data = $request->all();

        User::where('id_user', $data['id_user'])
            ->delete();

        return redirect(route('adminUsers'))
            ->with(['msg' => 'Админ успешно удален']);
    }

    public function change(Request $request) {
        $data = $request->all();

        $user = User::where('id_user', $data['id_user'])
            ->first();
        if (!$user) return redirect(route('index'));

        if ($user->phone != $data['phone']) {
            $checkUniq = User::where('phone', $data['phone'])->first();
            if ($checkUniq) return redirect(url()->previous())
                ->with(['error' => 'Такой телефон уже используется']);
        }
        if ($user->login != $data['login']) {
            $checkUniq = User::where('login', $data['login'])->first();
            if ($checkUniq) return redirect(url()->previous())
                ->with(['error' => 'Такой логин уже используется']);
        }

        $fields = [
            'surname' => $data['surname'],
            'name' => $data['name'],
            'patronymic' => $data['patronymic'],
            'phone' => $data['phone'],
            'login' => $data['login'],
        ];
        if (!empty($data['password'])) {
            $fields['password'] = Hash::make($data['password']);
        }

        User::where('id_user', $data['id_user'])
            ->update($fields);

        return redirect(route('adminUsers'))
            ->with(['msg' => 'Админ успешно изменен']);
    }

    public function create(Request $request) {
        // свои выводы ошибок, смотря какая ошибка в валидации, еще их можно менять тут - resources\lang\en\validation.php
        $messages = [
            'unique' => 'Такой :attribute уже занят',
        ];

        $data = $request->all();
        $fields = Validator::make($data,[
            'name' => 'required|max:255|min:1',
            'surname' => 'required|max:255|min:1',
            'patronymic' => 'nullable|max:255|min:1',
            'phone' => 'required|unique:user,phone|max:255|min:1',
            'login' => 'required|unique:user,login|max:255|min:1',
            'password' => 'required|min:6|max:255',
        ], $messages);
        if ($fields->fails()) {
            return redirect(url()->previous())
                ->withErrors($fields)
                ->withInput();
        }

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect(route('adminUsers'))
            ->with(['msg' => 'Админ успешно добавлен']); // сохраняет данные в сессию и отправляет на страницу, будет храниться в session('msg'), после первого запуска, автоматически сообщение стирается
    }

    public function logout() {
        if (Auth::check()) Auth::logout();
        return redirect(route('login'));
    }

    public function auth(Request $request) {
        $login = $request->login;
        $password = $request->password;

        $user = User::where('login', '=', $login)
            ->first();

        // если объект пустой
        if (!$user) {
            return redirect(url()->previous())
                ->withErrors(['error' => 'Неверный логин или пароль']) // своя ошибка
                ->withInput();
        }

        if (Hash::check($password, $user->password)) {
            Auth::login($user); // создаем сессию с данными нашего пользователя
            return redirect(route('admin'));
        }

        return redirect(url()->previous())
            ->withErrors(['error' => 'Неверный логин или пароль']) // своя ошибка
            ->withInput();
    }
}
