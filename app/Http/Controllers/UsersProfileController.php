<?php

namespace App\Http\Controllers;

use App\Models\UsersProfile;
use Illuminate\Http\Request;

class UsersProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsersProfile  $usersProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UsersProfile $usersProfile)
    {
        //
    }

    public function simpanphoto(Request $request){
        request()->validate([
            'photoprofile' =>'required|image|mimes:jpeg,png,gif,jpg,svg|max:2048',
        ]);
        $uid = $request->user_id;
        $users_profiles =  users_profiles::where('user_id',$uid)->first();
        $photolama =  $users_profiles->photo;
        if($files = $request->file('photoprofile')){
            $image = $request->file('photoprofile');
            $photobaru = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'),  $photobaru);
            if(\File::exists(public_path('img/' . $photolama))){
                \File::delete(public_path('img/' . $photolama));
            }
        }
        $users_profiles->photo = $photobaru;
        $users_profiles->save();
        return Response()->json("Sukses");

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsersProfile  $usersProfile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judulhalaman = "Edit Halaman Profile";
        $user = User::find($id);
        $users_profiles =  users_profiles::where('user_id', $id)->first();
        return view('user.editprofile', compact(['judulhalaman', 'user', 'profile']));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsersProfile  $usersProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users_profiles = Profile::find($id);
        $users_profiles->namadepan = $request->namadepan;
        $users_profiles->namabelakang = $request->namabelakang;
        $users_profiles->bod = $request->bod;
        $users_profiles->telp = $request->telp;
        $users_profiles->alamat = $request->alamat;
        $users_profiles->kota = $request->kota;
        $users_profiles->propinsi = $request->propinsi;
        $users_profiles->negara = $request->negara;
        $users_profiles->kodepos = $request->kodepos;
        $users_profiles->save();
        $pesan = "Profile berhasil diperbaharui";
        return redirect('/user/profile/' . $users_profiles->user_id)->with('alert-success', $pesan);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersProfile  $usersProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersProfile $usersProfile)
    {
        //
    }
}
