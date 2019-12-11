<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FrontController extends Controller
{
    public function index(){
        return view('index', ['test' => 'test123445']);
    }

    public function models()
    {
        $models = DB::table('models')->get();
        return view('models', compact('models'));
    }

    public function EnModels()
    {
        $models = DB::table('models')->get();
        return view('EnModels', compact('models'));
    }

    public function modelsVip()
    {
        return view('modelsVip', ['modelsVip' => 'modelsVip']);
    }

    public function price()
    {
        return view('price', ['price' => 'price']);
    }

    public function about()
    {
        return view('about', ['about' => 'about']);
    }

    public function services()
    {
        return view('services', ['services' => 'services']);
    }

    public function showModel($id)
    {
        $model = DB::table('models')->find($id);
        return view('showModel', compact('model'));
    }

    public function EnShowModel($id)
    {
        $model = DB::table('models')->find($id);
        return view('EnShowModel', compact('model'));
    }

    public function showModelVip()
    {
        return view('showModelVip', ['showModelVip' => 'showModelVip']);
    }

    public function vacancy()
    {
        return view('vacancy', ['vacancy' => 'vacancy']);
    }

    public function EnVacancy()
    {
        return view('EnVacancy', ['vacancy' => 'vacancy']);
    }


    public function contacts()
    {
        return view('contacts', ['contacts' => 'contacts']);
    }

    public function EnContacts()
    {
        return view('EnContacts', ['contacts' => 'contacts']);
    }

}
