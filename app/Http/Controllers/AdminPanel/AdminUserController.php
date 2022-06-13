<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = User::all();
        return view('admin.user.index', [
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $data = User::find($id);
        $roles = Role::all();
        return view('admin.user.show', [
            'data' => $data,
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function addrole(Request $request, $id)
    {
        $data = new RoleUser();
        $data->user_id = $id;
        $data->role_id = $request->role_id;
        $data->save();
        return redirect(route('admin.user.show', ['id' => $id]));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param int $uid
     * @return Response
     */
    public function destroyrole($uid, $rid)
    {
        $user = User::find($uid);
        $user->roles()->detach($rid);
        return redirect(route('admin.user.show', ['id' => $uid]));
    }
}
