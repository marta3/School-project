<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use Mail;
use App\Mail\VerifyEmail;


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
    protected $redirectTo = '/usuarios';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => 'required|string|max:20',
            'second_name' => 'required|max:50',
            'provincia' => 'required|max:30',
            'localidad' => 'required|max:50',
            'direccion' => 'required|max:100',
            'telefono' => 'required|max:9',
            'fecha_nac' => 'required|date',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:6|confirmed|max:100',
            'dni' => 'required|max:9',
            'foto' => 'image',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */


    protected function create(array $data)
    {
        $data['confirmation_code'] = str_random(25);

        if (isset($data['foto'])) {
            request()->file('foto')->store('users');
            // Devolveremos el Hash del Name que es lo que se guarda        
            $filename = request()->file('foto')->hashName();
        }else{

            $filename="foto_default.png";
        }



        $user= User::create([
            'name' => $data['name'],
            'second_name' => $data['second_name'],
            'provincia' => $data['provincia'],
            'localidad' => $data['localidad'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'fecha_nac' => $data['fecha_nac'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'dni' => $data['dni'],
            'vehiculo' => $data['vehiculo'],
            'foto' => $filename,
            'confirmation_code' => $data['confirmation_code'],
            

        ]);

        return $user;
    }
}
