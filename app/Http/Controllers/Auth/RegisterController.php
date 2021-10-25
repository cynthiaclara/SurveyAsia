<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\UsersProfile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'email/verify ';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth_my.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {

        // check the role of registration
        if ($request->role == Role::IS_RESPONDENT) {
            // validate respondent required fields
            $this->validatorRespondent($request->all())->validate();
        } else {
            // validate researcher required fields
            $this->validator($request->all())->validate();
        }

        //dispatch registration event
        event(new Registered($user = $this->create($request->all(), $request->role)));

        // create profile when registering as respondent
        if ($request->role == Role::IS_RESPONDENT) {
            $profile = $this->createProfile($request->all(), $user->id);
        }

        //$this->guard()->login($user);

        // registered event listener
        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return redirect($this->redirectPath())->with('success', 'Registration Complete');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'username' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Get a validator for an incoming respondent registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validatorRespondent(array $data)
    {
        $rules = [
            'first_name' => ['required', 'string', 'max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'nik' => ['required', 'numeric', 'min:16'],
            'gender' => ['required'],
            'birth_place' => ['required', 'string', 'max:50'],
            'birth_date' => ['required'],
            'ktp_province' => ['required', 'string', 'max:50'],
            'ktp_city' => ['required', 'string', 'max:50'],
            'ktp_district' => ['required', 'string', 'max:50'],
            'ktp_postal_code' => ['required', 'numeric'],
            'ktp_address' => ['required', 'max:255'],
            'job' => ['required', 'string'],
            'job_location' => ['required', 'string', 'max:50'],
        ];

        if (!$data['similar_address'] == 'checked') {
            $rules['province'] = ['required', 'string', 'max:50'];
            $rules['city'] = ['required', 'string', 'max:50'];
            $rules['district'] = ['required', 'max:50'];
            $rules['postal_code'] = ['required', 'numeric'];
            $rules['address'] = ['required', 'max:255'];
        }

        return Validator::make($data, $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @param int $role
     * @return \App\Models\User
     */
    protected function create(array $data, $role)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $role
        ]);
    }

    /**
     * Create a new user's profile as credentials for respondent.
     *
     * @param  array  $data
     * @param int $userId
     * @return \App\Models\UsersProfile
     */
    protected function createProfile(array $data, $userId)
    {
        # code...
        $profile = [
            'user_id' => $userId,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'nik' => $data['nik'],
            'gender' => $data['gender'],
            'birth_place' => $data['birth_place'],
            'birth_date' => $data['birth_date'],
            'ktp_province' => $data['ktp_province'],
            'ktp_city' => $data['ktp_city'],
            'ktp_district' => $data['ktp_district'],
            'ktp_postal_code' => $data['ktp_postal_code'],
            'ktp_address' => $data['ktp_address'],
            'job' => $data['job'],
            'job_location' => $data['job_location'],
        ];

        // check if current address is similar to ktp addresses
        if ($data['similar_address'] == 'checked') {
            $profile['province'] = $profile['ktp_province'];
            $profile['city'] = $profile['ktp_city'];
            $profile['district'] = $profile['ktp_district'];
            $profile['postal_code'] = $profile['ktp_postal_code'];
            $profile['address'] = $profile['ktp_address'];
        } else {
            $profile['province'] = $data['province'];
            $profile['city'] = $data['city'];
            $profile['district'] = $data['district'];
            $profile['postal_code'] = $data['postal_code'];
            $profile['address'] = $data['address'];
        }


        return UsersProfile::create($profile);
    }
}
