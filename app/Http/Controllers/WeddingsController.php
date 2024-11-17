<?php

namespace App\Http\Controllers;

use App\Models\WeddingsReq;
use Illuminate\Http\Request;

class WeddingsController extends Controller
{
    public function delete(Request $request) {
        $data = $request->all();

        WeddingsReq::where('id_wedding_request', $data['id_wedding_request'])
            ->delete();

        return redirect(route('adminWeddings'))
            ->with(['msg' => 'Заявка на свадьбу успешно удалена']);
    }

    public function create(Request $request) {
        $data = $request->all();

        WeddingsReq::create($data);

        return redirect(route('weddings').'#msg')
            ->with(['msg' => 'Заявка успешно отправлена']);
    }
}
