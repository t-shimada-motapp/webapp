<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->user_id = $request->user_id;
        $user->password = $request->password;
        $user->skin = $request->skin;
        $user->save();
        return redirect('api/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        if (isset($request->name))
        {
            $user->name = $request->name;
        }
        if (isset($request->email))
        {
            $user->email = $request->email;
        }
        if (isset($request->user_id))
        {
            $user->user_id = $request->user_id;
        }
        if (isset($request->password))
        {
            $user->password = $request->password;
        }
        if (isset($request->skin))
        {
            $user->skin = $request->skin;
        }
        $user->save();
        return redirect("api/user/".$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect('api/user');
    }
}
