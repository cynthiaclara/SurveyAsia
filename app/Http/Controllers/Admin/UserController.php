<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendCustomEmailJob;
use App\Jobs\SendWelcomeMailToUserJob;
use App\Mail\WelcomeNewUserMail;
use App\Models\Role;
use App\Models\User;
use App\Notifications\Custom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate as Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

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
        //abort_if(!$user->can('viewAny', User::class), 403, 'Unauthorized');
        $users = User::with('subscription')->get();
        $rolesWithPermissions = Role::with('permissions')->get();
        $rolesWithUsers = Role::with('users')->get();
        $usersWithRole = User::with('role')->get();
        //$usersWithPermissions = User::with('permissions')->get();

        // dd($users);

        //test notifiy all users
        // Notification::send(User::all(), new Custom);

        $data = [
            'users' => $users
        ];

        return view('admin.user.index', $data);
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
        if (!Gate::allows('create', $request->user())) {
            abort(403, 'Unauthorized');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        if (!Gate::allows('update', $user)) {
            abort(403, 'Unauthorized');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        //$this->authorize('delete', $user);
        if (!Gate::allows('delete', $user)) {
            abort(403, 'Unauthorized');
        }

        $user->delete();

        return redirect('admin/users')->with(['success' => 'User deleted']);
    }

    public function notify(User $user)
    {
        # code...
        // SendCustomEmailJob::dispatch($user);
        // $user->notify(new Custom);
        SendWelcomeMailToUserJob::dispatch($user)->onQueue('emails');
        // Mail::to($user)->send(new WelcomeNewUserMail);
        return redirect('/admin/users')->with('success', 'Notification sent');
    }

    public function profile(User $user)
    {
        # code...
        return view('admin.user.profile', ['user' => $user]);
    }
}
