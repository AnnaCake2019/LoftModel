<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    public function menu(){
        return view('admin.menu');
    }

    public function modelsA(){
        return view('admin.modelsA');
    }

    public function modelsAV(){
        return view('admin.modelsAV');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'main_photo' => 'required ',
            'one_photo' => 'required',
            'two_photo' => 'required',
            'three_photo' => 'required',
            'four_photo' => 'required',
            'five_photo' => 'required',
            'six_photo' => 'required',
            'name' => 'required',
            'age' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'parameters' => 'required',
            'chest' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        $main_i = $request->file('main_photo')->store('mod', 'public');


        $main_photo = $request->post('main_photo');
        $one_photo = $request->post('one_photo');
        $two_photo = $request->post('two_photo');
        $three_photo = $request->post('three_photo');
        $four_photo = $request->post('four_photo');
        $five_photo = $request->post('five_photo');
        $six_photo = $request->post('six_photo');
        $name = $request->post('name');
        $age = $request->post('age');
        $height = $request->post('height');
        $weight = $request->post('weight');
        $parameters = $request->post('parameters');
        $chest = $request->post('chest');
        $country = $request->post('country');
        $city = $request->post('city');
        $followers = $request->post('followers');
        $achievements = $request->post('achievements');
        $from_who = $request->post('from_who');
        DB::table('models')->insert(
            [
                'main_photo' => $main_photo,
                'one_photo' => $one_photo,
                'two_photo' => $two_photo,
                'three_photo' => $three_photo,
                'four_photo' => $four_photo,
                'five_photo' => $five_photo,
                'six_photo' => $six_photo,
                'name' => $name,
                'age' => $age,
                'height' => $height,
                'weight' => $weight,
                'parameters' => $parameters,
                'chest' => $chest,
                'country' => $country,
                'city' => $city,
                'followers' => $followers,
                'achievements' => $achievements,
                'from_who' => $from_who
            ]
        );
        return view('admin.modelsA');
    }
}
