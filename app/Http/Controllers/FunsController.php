<?php

namespace App\Http\Controllers;

use App\Models\Funs;
use Illuminate\Http\Request;

class FunsController extends Controller
{
    public function create(Request $request) {
        $img = $request->file('img_fun'); // получили файл
        $typeImg = $img->extension(); // взяли расширение

        $uniqName = md5(uniqid(rand(), true)); // уникальное название для нашего файла в файловой системе
        $nameImg = $uniqName.'.'.$typeImg;
        $pathFolder = 'uploads/';
        if (!$img->move(public_path($pathFolder), $nameImg)) { // сохранить картинку в public\uploads
            return redirect(url()->previous())
                ->withErrors(['errorForImg' => 'Что-то пошло не так, картинка не может загрузиться на сервер'])
                ->withInput();
        }
        $path = $pathFolder.$nameImg;

        Funs::create([
            'img_fun' => $path,
            'title_fun' => $request->title_fun,
            'description_fun' => $request->description_fun,
            'phone_fun' => $request->phone_fun,
            'price_fun' => $request->price_fun,
        ]);

        return redirect(route('adminFuns'))
            ->with(['msg' => 'Услуга успешно добавлена']);
    }

    public function change(Request $request) {
        $fun = Funs::where('id_fun', $request->id_fun)
            ->first();
        if (!$fun) return redirect(route('index'));

        $img = $request->file('img_fun');
        $path = '';
        if ($img) {
            unlink($fun->img_fun); // удаляем старый файл с картинкой
            $typeImg = $img->extension();
            $uniqName = md5(uniqid(rand(), true)); // уникальное название для нашего файла в файловой системе
            $nameImg = $uniqName.'.'.$typeImg;
            $pathFolder = 'uploads/';
            if (!$img->move(public_path($pathFolder), $nameImg)) {
                return redirect(url()->previous())
                    ->withErrors(['errorForImg' => 'Что-то пошло не так, картинка не может загрузиться на сервер'])
                    ->withInput();
            }
            $path = $pathFolder.$nameImg;
        }

        $fun->update([
            'img_fun' =>  $img ? $path : $fun->img_fun,
            'title_fun' => $request->title_fun ? $request->title_fun : $fun->title_fun,
            'description_fun' => $request->description_fun ? $request->description_fun : $fun->description_fun,
            'phone_fun' => $request->phone_fun ? $request->phone_fun : $fun->phone_fun,
            'price_fun' => $request->price_fun ? $request->price_fun : $fun->price_fun,
        ]);

        return redirect(route('adminFuns'))
            ->with(['msg' => 'Услуга успешно изменена']);
    }

    public function delete(Request $request) {
        $id_fun = $request->id_fun;
        $fun = Funs::where('id_fun', $id_fun)
            ->first();
        if (!$fun) return redirect(route('index'));

        unlink($fun->img_fun);
        $fun->delete();

        return redirect(route('adminFuns'))
            ->with(['msg' => 'Услуга успешно удалена']);
    }
}
