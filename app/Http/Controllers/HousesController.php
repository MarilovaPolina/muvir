<?php

namespace App\Http\Controllers;

use App\Models\Houses;
use App\Models\HousesReq;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    public function deleteReq(Request $request) {
        $data = $request->all();

        HousesReq::where('id_request', $data['id_request'])
            ->delete();

        return redirect(route('adminReqHouses'))
            ->with(['msg' => 'Заявка на аренду дома успешно удалена']);
    }

    public function create(Request $request) {
        $img = $request->file('img_house'); // получили файл
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

        Houses::create([
            'img_house' => $path,
            'title_house' => $request->title_house,
            'description_house' => $request->description_house,
            'short_description_house' => $request->short_description_house,
            'price_house' => $request->price_house,
        ]);

        return redirect(route('adminHouses'))
            ->with(['msg' => 'Дом успешно добавлен']);
    }

    public function change(Request $request) {
        $house = Houses::where('id_house', $request->id_house)
            ->first();
        if (!$house) return redirect(route('index'));

        $img = $request->file('img_house');
        $path = '';
        if ($img) {
            unlink($house->img_house); // удаляем старый файл с картинкой
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

        $house->update([
            'img_house' =>  $img ? $path : $house->img_house,
            'title_house' => $request->title_house ? $request->title_house : $house->title_exc,
            'description_house' => $request->description_house ? $request->description_house : $house->description_exc,
            'short_description_house' => $request->short_description_house ? $request->short_description_house : $house->phone_exc,
            'price_house' => $request->price_house ? $request->price_house : $house->price_exc,
        ]);

        return redirect(route('adminHouses'))
            ->with(['msg' => 'Дом успешно изменен']);
    }

    public function delete(Request $request) {
        $id_house = $request->id_house;
        $house = Houses::where('id_house', $id_house)
            ->first();
        if (!$house) return redirect(route('index'));

        if ($house->check()) return redirect(route('adminHouses'))
            ->with(['error' => 'Дом нельзя удалить, т.к. используется в аренде']);

        unlink($house->img_house);
        $house->delete();

        return redirect(route('adminHouses'))
            ->with(['msg' => 'Дом успешно удален']);
    }
}
