<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function create(Request $request) {
        $img = $request->file('img_post'); // получили файл
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

        Posts::create([
            'img_post' => $path,
            'title_post' => $request->title_post,
            'description_post' => $request->description_post,
        ]);

        return redirect(route('admin'))
            ->with(['msg' => 'Мероприятие успешно добавлено']);
    }

    public function change(Request $request) {
        $post = Posts::where('id_post', $request->id_post)
            ->first();
        if (!$post) return redirect(route('index'));

        $img = $request->file('img_post');
        $path = '';
        if ($img) {
            unlink($post->img_post); // удаляем старый файл с картинкой
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

        $post->update([
            'img_post' =>  $img ? $path : $post->img_post,
            'title_post' => $request->title_post ? $request->title_post : $post->title_post,
            'description_post' => $request->description_post ? $request->description_post : $post->description_post,
        ]);

        return redirect(route('admin'))
            ->with(['msg' => 'Мероприятие успешно изменено']);
    }

    public function delete(Request $request) {
        $id_post = $request->id_post;
        $post = Posts::where('id_post', $id_post)
            ->first();
        if (!$post) return redirect(route('index'));

        unlink($post->img_post);
        $post->delete();

        return redirect(route('admin'))
            ->with(['msg' => 'Мероприятие успешно удалено']);
    }
}
