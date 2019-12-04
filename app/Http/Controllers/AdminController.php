<?php

namespace App\Http\Controllers;

use Faker\Provider\Image as Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    public function adminModel($id)
    {
        $model = DB::table('models')->find($id);
        return view('admin.adminModel', compact('model'));
    }

//    public function destroy($id) {
//        DB::delete('delete from `models` where id = ?',[$id]);
////        $path = $main_photo;
////        unlink(public_path('uploads' . $path));
//        echo "Record deleted successfully.<br/>";
//        echo '<a href="/public/admin/albumA">Click Here</a> to go back.';
//    }




    public function delete(Request $request){
        $id = $request->get('id');
        $path1 = $request->get('main_photo');
        $path2 = $request->get('one_photo');
        $path3 = $request->get('two_photo');
        $path4 = $request->get('three_photo');
        $path5 = $request->get('four_photo');
        $path6 = $request->get('five_photo');
        $path7 = $request->get('six_photo');
        DB::delete('delete from `models` where id = ?',[$id]);
        Storage::delete(['/public/' . $path1, '/public/' . $path2, '/public/' . $path3, '/public/' . $path4, '/public/' . $path5, '/public/' . $path6, '/public/' . $path7]);
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
//            'one_photo' => 'required',
//            'two_photo' => 'required',
//            'three_photo' => 'required',
//            'four_photo' => 'required',
//            'five_photo' => 'required',
//            'six_photo' => 'required',
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
        $main_photo = $path;

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
//                'one_photo' => $one_photo,
//                'two_photo' => $two_photo,
//                'three_photo' => $three_photo,
//                'four_photo' => $four_photo,
//                'five_photo' => $five_photo,
//                'six_photo' => $six_photo,
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
        if ($request->has('one_photo')){
            $path1 = $request->file('one_photo')->store('uploads', 'public');
            $one_photo = $path1;
            DB::table('models')->update([
                'one_photo' => $one_photo,
            ]);
        }
        if ($request->has('two_photo')){
            $path2 = $request->file('two_photo')->store('uploads', 'public');
            $two_photo = $path2;
            DB::table('models')->update([
                'two_photo' => $two_photo,
            ]);
        }
        if ($request->has('three_photo')){
            $path3 = $request->file('three_photo')->store('uploads', 'public');
            $three_photo = $path3;
            DB::table('models')->update([
                'three_photo' => $three_photo,
            ]);
        }

        if ($request->has('four_photo')){
            $path4 = $request->file('four_photo')->store('uploads', 'public');
            $four_photo = $path4;
            DB::table('models')->update([
                'four_photo' => $four_photo,
            ]);
        }

        if ($request->has('five_photo')){
            $path5 = $request->file('five_photo')->store('uploads', 'public');
            $five_photo= $path5;
            DB::table('models')->update([
                'five_photo' => $five_photo,
            ]);
        }

        if ($request->has('six_photo')){
            $path6 = $request->file('six_photo')->store('uploads', 'public');
            $six_photo = $path6;
            DB::table('models')->update([
                'six_photo' => $six_photo,
            ]);
        }

        return view('admin.modelsA');
    }
}
