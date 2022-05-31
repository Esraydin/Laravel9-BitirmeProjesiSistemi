<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $data= Project::all();
        return view('admin.project.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $data= Category::all();
        return view('admin.project.create',[
            'data' => $data
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {


        $data=new Project();
        $data->category_id = $request-> category_id;
        $data->user_id =0 ;// $request-> category_id;
        $data->title = $request-> title;
        $data->keywords = $request->keywords;
        $data->description= $request->description;
        $data->detail= $request->detail;
        $data->status=$request->status;
        if($request->file('image')){
            $data->image =$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/project');

    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @return Response
     */
    public function show(Project $project,$id)

    {
        $data=Project::find($id);
        return view('admin.project.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return Response
     */
    public function edit(Project $project,$id)
    {
        $data=Project::find($id);
        $datalist= Category::all();
        return view('admin.project.edit',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Project $project
     * @return Response
     */
    public function update(Request $request, Project $project,$id)
    {
        //
        $data = Project::find($id);
        $data->category_id = $request-> category_id;
        $data->user_id =0 ;// $request-> category_id;
        $data->title = $request-> title;
        $data->keywords = $request->keywords;
        $data->description= $request->description;
        $data->detail= $request->detail;
        $data->status=$request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/project');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @param $id
     * @return Response
     */
    public function destroy(Project $project, $id)
    {

        $data=Project::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect('admin/project');

    }
}
