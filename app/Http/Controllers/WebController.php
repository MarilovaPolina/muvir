<?php

namespace App\Http\Controllers;

use App\Models\Excursions;
use App\Models\ExcursionsReq;
use App\Models\Funs;
use App\Models\Houses;
use App\Models\HousesReq;
use App\Models\Posts;
use App\Models\User;
use App\Models\WeddingsReq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function index() {
        $news = Posts::limit(3)->orderByDesc('id_post')->get();

        return view('index', [
            'news' => $news
        ]);
    }

    public function login() {
        if (Auth::check()) return redirect(route('admin'));
        return view('login');
    }

    public function news() {
        $news = Posts::orderByDesc('id_post')->get();

        return view('news', [
            'news' => $news
        ]);
    }

    public function weddings() {
        return view('weddings');
    }

    public function house($id) {
        $house = Houses::where('id_house', $id)
            ->first();
        if (!$house) return redirect(route('index'));

        return view('house', [
            'house' => $house
        ]);
    }

    public function excursion($id) {
        $excursion = Excursions::where('id_exc', $id)
            ->first();
        if (!$excursion) return redirect(route('index'));

        return view('excursion', [
            'excursion' => $excursion
        ]);
    }

    public function new($id) {
        $new = Posts::where('id_post', $id)
            ->first();
        if (!$new) return redirect(route('index'));

        return view('new', [
            'new' => $new
        ]);
    }

    public function products() {
        return view('products');
    }

    public function bookingHouse() {
        return view('bookingHouse');
    }

    public function houses() {
        $houses = Houses::orderByDesc('id_house')->get();

        return view('houses', [
            'houses' => $houses
        ]);
    }

    public function createHouseReq(Request $request) {
        HousesReq::create($request->all());

        return redirect(route('houses'))
            ->with(['msg' => 'Вы успешно забронировали дом']);
    }

    public function fun() {
        $funs = Funs::orderByDesc('id_fun')->get();

        return view('fun', [
            'funs' => $funs
        ]);
    }

    public function excursions() {
        $excursions = Excursions::orderByDesc('id_exc')->get();

        return view('excursions', [
            'excursions' => $excursions
        ]);
    }

    public function about() {
        return view('about');
    }

    public function where() {
        return view('where');
    }

    public function map() {
        return view('map');
    }

    public function contact() {
        return view('contact');
    }

    public function production() {
        return view('production');
    }

    public function investor() {
        return view('investor');
    }



    public function adminWeddings() {
        $weddings = WeddingsReq::orderByDesc('id_wedding_request')->get();

        return view('admin.weddings', [
            'weddings' => $weddings
        ]);
    }

    public function adminExcursions() {
        $excursions = Excursions::orderByDesc('id_exc')->get();

        return view('admin.excursions', [
            'excursions' => $excursions
        ]);
    }

    public function adminUsers() {
        $users = User::orderByDesc('id_user')->get();

        return view('admin.users', [
            'users' => $users
        ]);
    }

    public function adminUserChange($id) {
        $user = User::where('id_user', $id)
            ->first();
        if (!$user) return redirect(route('adminUsers'));

        return view('admin.add.user', [
            'user' => $user
        ]);
    }

    public function adminReqHouses() {
        $houses = HousesReq::orderByDesc('id_request')->get();

        return view('admin.reqHouses', [
            'houses' => $houses
        ]);
    }

    public function adminChangeHouse($id) {
        $house = Houses::where('id_house', $id)
            ->first();
        if (!$house) return redirect(route('adminHouses'));

        return view('admin.add.house', [
            'house' => $house
        ]);
    }

    public function admin() {
        $news = Posts::orderByDesc('id_post')->get();

        return view('admin.news', [
            'news' => $news
        ]);
    }

    public function adminHouses() {
        $houses = Houses::orderByDesc('id_house')->get();

        return view('admin.houses', [
            'houses' => $houses
        ]);
    }

    public function adminFuns() {
        $funs = Funs::orderByDesc('id_fun')->get();

        return view('admin.funs', [
            'funs' => $funs
        ]);
    }

    public function adminReqExcursions() {
        $excursions = ExcursionsReq::orderByDesc('id_request')->get();

        return view('admin.reqExcursions', [
            'excursions' => $excursions
        ]);
    }

    public function adminExcursionChange($id) {
        $excursion = Excursions::where('id_exc', $id)
            ->first();
        if (!$excursion) return redirect(route('adminExcursions'));

        return view('admin.add.excursion', [
            'excursion' => $excursion
        ]);
    }

    public function adminUser() {
        return view('admin.add.user');
    }

    public function adminNew() {
        return view('admin.add.new');
    }

    public function adminPostChange($id) {
        $post = Posts::where('id_post', $id)
            ->first();
        if (!$post) return redirect(route('admin'));

        return view('admin.add.new', [
            'post' => $post
        ]);
    }

    public function adminHouse() {
        return view('admin.add.house');
    }

    public function adminFun() {
        return view('admin.add.fun');
    }

    public function adminFunChange($id) {
        $fun = Funs::where('id_fun', $id)
            ->first();
        if (!$fun) return redirect(route('adminFuns'));

        return view('admin.add.fun', [
            'fun' => $fun
        ]);
    }

    public function adminExcursion() {
        return view('admin.add.excursion');
    }
}
