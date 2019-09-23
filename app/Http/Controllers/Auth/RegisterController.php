<?php

namespace App\Http\Controllers\Auth;

use App\Mail\Welcome;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;

/**
 * @group Register user
 */
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
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'type' => ['required']
        ]);
    }


    /**
     * @param array $data
     * @return mixed
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make(Str::random(12)),
            'type' => $data['type'],
        ]);
    }

    /**
     * Create a new user
     *
     * @bodyParam name string required Name of the new user
     * @bodyParam email email required Email of the new user
     * @bodyParam type string required Type of the new user ('admin' or 'teacher')
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        event(new Registered($user));

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
}

    protected function registered($request, $user)
    {
        $token = $this->createPasswordToken($user);

        $this->sendWelcomeMail($user, $token);

        return response()->json([
            'message' => 'User successfully registered.',
            'user' => $user
        ], 201);
    }

    protected function sendWelcomeMail(User $user, $token)
    {
        Mail::to($user)->send(new Welcome($user, $token));
    }

    protected function createPasswordToken($user)
    {
        return app('auth.password.broker')->createToken($user);
    }
}
