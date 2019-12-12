<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FrontController extends Controller
{
    public function Index(){
        return view('index', ['test' => 'test123445']);
    }

    public function Models()
    {
        $models = DB::table('models')->get();
        return view('models', compact('models'));
    }

    public function EnModels()
    {
        $models = DB::table('models')->get();
        return view('EnModels', compact('models'));
    }

    public function ModelsVip()
    {
        return view('modelsVip', ['modelsVip' => 'modelsVip']);
    }

    public function Price()
    {
        return view('price', ['price' => 'price']);
    }

    public function EnPrice()
    {
        return view('EnPrice', ['price' => 'price']);
    }

    public function About()
    {
        return view('about', ['about' => 'about']);
    }

    public function EnAbout()
    {
        return view('EnAbout', ['about' => 'about']);
    }

    public function Services()
    {
        return view('services', ['services' => 'services']);
    }

    public function EnServices()
    {
        return view('EnServices', ['services' => 'services']);
    }

    public function ShowModel($id)
    {
        $model = DB::table('models')->find($id);
        return view('showModel', compact('model'));
    }

    public function EnShowModel($id)
    {
        $model = DB::table('models')->find($id);
        return view('EnShowModel', compact('model'));
    }

    public function ShowModelVip()
    {
        return view('showModelVip', ['showModelVip' => 'showModelVip']);
    }

    public function Vacancy()
    {
        return view('vacancy', ['vacancy' => 'vacancy']);
    }

    public function EnVacancy()
    {
        return view('EnVacancy', ['vacancy' => 'vacancy']);
    }


    public function Contacts()
    {
        return view('contacts', ['contacts' => 'contacts']);
    }

    public function EnContacts()
    {
        return view('EnContacts', ['contacts' => 'contacts']);
    }

}
