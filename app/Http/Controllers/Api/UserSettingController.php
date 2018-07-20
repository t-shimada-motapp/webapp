<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\UserSetting;
use App\Http\Controllers\Controller;

class UserSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return UserSetting::all();
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
        $user_setting = new UserSetting;
        $user_setting->user_id = $request->user_id;
        $user_setting->skin = $request->skin;
        $user_setting->save();
        return redirect('api/user_setting');
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
        return UserSetting::find($id);
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
        $user_setting = UserSetting::find($id);
        $user_setting->user_id = $request->user_id;
        $user_setting->skin = $request->skin;
        $user_setting->save();
        return redirect("api/user_setting/".$id);
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
        $user_setting = UserSetting::find($id);
        $user_setting->delete();
        return redirect('api/user_setting');
    }
}
