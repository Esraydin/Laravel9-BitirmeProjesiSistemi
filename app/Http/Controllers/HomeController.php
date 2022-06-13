<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Evaluation;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $sliderdata = Project::limit(5)->get();
        $datalist = Project::limit(10)->get();
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

    public function faq()
    {

        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq', [
            'setting' => $setting,
            'datalist' => $datalist

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

    public function storecomment(Request $request)
    {

        $data = new Comment();
        $data->user_id = Auth::id();
        $data->project_id = $request->input('project_id');
        $data->subject = $request->input('subject');
        $data->comment = $request->input('comment');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();

        $data->save();
        return redirect()->route('project', ['id' => $request->input('project_id')])->with('success', 'Your comment has been sent,Thank You.');

    }

    public function project($id)
    {

        $data = Project::find($id);
        $images = DB::table('images')->where('project_id', $id)->get();
        $comment = Comment::where('project_id', $id)->where('status', 'True')->get();
        return view('home.project', [
            'data' => $data,
            'images' => $images,
            'comment' => $comment
        ]);
    }

    public function categoryprojects($id)
    {

        $category = Project::find($id);
        $project = DB::table('projects')->where('category_id', $id)->get();
        return view('home.categoryprojects', [
            'category' => $category,
            'project' => $project

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

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');

        }
        return back()->withErrors([
            'error' => 'The provided credentials do not  match  our records.',
        ])->onlyInput('email');
    }

    public function myprojects()
    {
        $data = Evaluation::where('user_id', Auth::user()->id)->get();
        return view('home.myprojects', [
            'data' => $data
        ]);

    }

    public function myevaluations()
    {
        $data = Project::where('user_id', Auth::user()->id)->get();
        return view('home.myevaluations', [
            'data' => $data
        ]);

    }

    public function myreviews()
    {
        $data = Comment::where('user_id', Auth::user()->id)->get();
        return view('home.myreviews', [
            'data' => $data
        ]);

    }

    public function mymessages()
    {
        $data = Message::where('name', Auth::user()->name)->get();
        return view('home.mymessages', [
            'data' => $data
        ]);

    }

}
