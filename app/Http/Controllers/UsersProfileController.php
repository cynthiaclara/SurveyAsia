<?php

namespace App\Http\Controllers;

use App\Models\UsersProfile;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    /**
     * Untuk menampilkan halaman pengaturan
     *
     * @return void
     */
    public function pengaturan()
    {
        
        return view('user.editprofile');
    }

    /**
     * Fungsi untuk menampilkan halaman Update Profil
     *
     * @param Request $request
     * @return void
     */
    public function updateProfil(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'username' => 'string',
            'telp' => 'numeric|max:15',
            'pekerjaan' => 'string',
            'email' => 'string',
            'avatar' => 'image|file|max:2024'

        ]);
        if($request->file('avatar')) {
            $validatedData['avatar'] = $request->file('image')->updateProfile('storage');
        
        }
        $validatedData['user_id'] = auth()->user()->id;
        Profile::update($validatedData);


      $profile->save();

        return redirect()
            ->route('user.profile', $request->get('username'))
            ->with('success', 'Ubah profil sukses');

    }

    /**
     * Ubah password pengguna
     *
     * @param Request $request
     * @return void
     */
    public function changePassword(Request $request)
    { 
        $validator = Validator::make($request->all(), array(
            'old_password' => 'required',
            'password' => 'required | string | min:5 | confirmed',
        ));

        if ($validator->fails()) 
        {
            return redirect()
                ->route('setting-account')
                ->with('error.alert', 'Ubah password gagal');
        }

        $old_password = $request->get('old_password');
        $new_password = $request->get('password');

        if (Hash::check($old_password, \Auth::user()->password)) {

            $user = User::findOrFail(\Auth::user()->id);

            $user->password = Hash::make($new_password);
            $user->save();

            return redirect()
                ->route('pengaturan')
                ->with('success', 'Ubah password sukses');
        
        } else {
            
            return redirect()
                ->route('pengaturan')
                ->with('error', 'Ubah password gagal');
        }
    }
}
