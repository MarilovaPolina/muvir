<?php

namespace App\Http\Controllers;

use App\Models\Excursions;
use App\Models\ExcursionsReq;
use Illuminate\Http\Request;

class ExcursionsController extends Controller
{
    public function deleteReq(Request $request) {
        $data = $request->all();

        ExcursionsReq::where('id_request', $data['id_request'])
            ->delete();

        return redirect(route('adminReqExcursions'))
            ->with(['msg' => 'Заявка на экскурсию успешно удалена']);
    }

    public function delete(Request $request) {
        $id_exc = $request->id_exc;
        $excursion = Excursions::where('id_exc', $id_exc)
            ->first();
        if (!$excursion) return redirect(route('index'));

        if ($excursion->check()) return redirect(route('adminExcursions'))
            ->with(['error' => 'Экскурсию нельзя удалить, т.к. используется в заявке']);

        unlink($excursion->img_exc);
        $excursion->delete();

        return redirect(route('adminExcursions'))
            ->with(['msg' => 'Экскурсия успешно удалена']);
    }

    public function create(Request $request) {
        $img = $request->file('img_exc'); // получили файл
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

        Excursions::create([
            'id_exc' => $request->id_exc,
            'img_exc' => $path,
            'title_exc' => $request->title_exc,
            'description_exc' => $request->description_exc,
            'phone_exc' => $request->phone_exc,
            'price_exc' => $request->price_exc,
        ]);

        return redirect(route('adminExcursions'))
            ->with(['msg' => 'Экскурсия успешно добавлена']);
    }

    public function change(Request $request) {
        $excursion = Excursions::where('id_exc', $request->id_exc)
            ->first();
        if (!$excursion) return redirect(route('index'));

        $img = $request->file('img_exc');
        $path = '';
        if ($img) {
            unlink($excursion->img_exc); // удаляем старый файл с картинкой
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

        $excursion->update([
            'id_exc' => $request->id_exc ? $request->id_exc : $excursion->id_exc,
            'img_exc' =>  $img ? $path : $excursion->img_exc,
            'title_exc' => $request->title_exc ? $request->title_exc : $excursion->title_exc,
            'description_exc' => $request->description_exc ? $request->description_exc : $excursion->description_exc,
            'phone_exc' => $request->phone_exc ? $request->phone_exc : $excursion->phone_exc,
            'price_exc' => $request->price_exc ? $request->price_exc : $excursion->price_exc,
        ]);

        return redirect(route('adminExcursions'))
            ->with(['msg' => 'Экскурсия успешно изменена']);
    }
}
