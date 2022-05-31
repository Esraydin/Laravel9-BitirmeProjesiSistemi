<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
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
        return view('home.index', [
            'page' => $page,
            'sliderdata' => $sliderdata,
            'datalist' => $datalist
        ]);
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
