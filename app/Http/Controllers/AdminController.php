<?php

namespace App\Http\Controllers;

use Faker\Provider\Image as Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function menu(){
        return view('admin.menu');
    }

    public function modelsA(){

        return view('admin.modelsA');
    }

    public function albumA()
    {
        $models = DB::table('models')->get();
        return view('admin.albumA', compact('models'));
    }

    public function destroy($id) {
        DB::delete('delete from `models` where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href="/public/admin/albumA">Click Here</a> to go back.';
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

        $path = $request->file('main_photo')->store('uploads', 'public');
        $path1 = $request->file('one_photo')->store('uploads', 'public');
        $path2 = $request->file('two_photo')->store('uploads', 'public');
        $path3 = $request->file('three_photo')->store('uploads', 'public');
        $path4 = $request->file('four_photo')->store('uploads', 'public');
        $path5 = $request->file('five_photo')->store('uploads', 'public');
        $path6 = $request->file('six_photo')->store('uploads', 'public');


        $main_photo = $path;
        $one_photo = $path1;
        $two_photo = $path2;
        $three_photo = $path3;
        $four_photo = $path4;
        $five_photo= $path5;
        $six_photo = $path6;

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
