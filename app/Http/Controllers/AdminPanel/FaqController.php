<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Faq::all();
        return view('admin.faq.index', [
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
        $data = Faq::all();
        return view('admin.faq.create', [
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

        $data = new Faq();
        $data->questions = $request->questions;
        $data->answer = $request->answer;
        $data->status = $request->status;
        $data->save();
        return redirect('admin/faq');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $data = Faq::find($id);

        return view('admin.faq.edit', [
            'data' => $data

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * * @param Faq $faq
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $data = Faq::find($id);
        $data->questions = $request->questions;
        $data->answer = $request->answer;
        $data->status = $request->status;
        $data->save();
        return redirect('admin/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
