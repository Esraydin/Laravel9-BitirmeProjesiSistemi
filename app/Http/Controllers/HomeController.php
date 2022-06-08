<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function index()
    {
        $page = 'home';
        $sliderdata = Project::limit(2)->get();
        $datalist = Project::limit(2)->get();
        $setting = Setting::first();
        return view('home.index', [
            'page' => $page,
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'datalist' => $datalist
        ]);
    }

    public function about()
    {

        $setting = Setting::first();
        return view('home.about', [
            'setting' => $setting,

        ]);
    }

    public function references()
    {

        $setting = Setting::first();
        return view('home.references', [
            'setting' => $setting,

        ]);
    }

    public function contact()
    {

        $setting = Setting::first();
        return view('home.contact', [
            'setting' => $setting,

        ]);
    }

    public function storemessage(Request $request)
    {
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();

        $data->save();
        return redirect()->route('contact')->with('info', 'Your message has been sent,Thank You.');

    }

    public function project($id)
    {

        $data = Project::find($id);
        $images = DB::table('images')->where('project_id', $id)->get();
        return view('home.project', [
            'data' => $data,
            'images' => $images

        ]);
    }

    public function categoryprojects($id)
    {

        $data = Project::find($id);
        $images = DB::table('images')->where('project_id', $id)->get();
        return view('home.project', [
            'data' => $data,
            'images' => $images

        ]);
    }

    public function test()
    {
        return view('home.test');
    }

    public function param($id, $number)
    {
        //echo "parameter 1: ", $id;
        // echo "<br>parameter 2: ",$number;
        //echo "<br> Sum Parameters: ",$id+$number;
        return view('home.test2',
            [
                'id' => $id,
                'number' => $number

            ]);
    }

    public function save(Request $request)
    {
        echo "Save Function <br> ";
        echo "Name: ", $_REQUEST["fname"];
        echo " Last name: ", $_REQUEST["lname"];
        return view('home.test2',
            [
                'id' => $_REQUEST["fname"],
                'number' => $_REQUEST["lname"]

            ]);
    }

}
