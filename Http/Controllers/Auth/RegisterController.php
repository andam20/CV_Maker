<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'living_place' => ['required', 'string', 'min:3'],
             'gender' => ['required'],
            'phone' => ['required', 'numeric'],
            'uni' => ['required', 'string'],
            'bio' => ['required', 'string'],
            'profission' => ['required', 'string'],
            'birthdate' => ['required', 'date'],
            'linkedIn_acc' => ['required', 'string'],
            'github_link' => ['required', 'string'],
            'sof_acc' => ['required', 'string'],
            'lang' => ['required', 'string'],
            'skills' => ['required', 'string'],
            'activity' => ['required', 'string'],
            // 'img' => ['file'],


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'living_place' => $data['living_place'],
            'phone' => $data['phone'],
            'uni' => $data['uni'],
            'bio' => $data['bio'],
            'profission' => $data['profission'],
            'birthdate' => $data['birthdate'],
            'github_link' => $data['github_link'],
            'linkedIn_acc' => $data['linkedIn_acc'],
            'sof_acc' => $data['sof_acc'],
            'lang' => $data['lang'],
            'skills' => $data['skills'],
            'activity' => $data['activity'],
            'img' => $data['img'],
            'password' => $data['password'],
        ]);
        if(request()->hasFile('img')){
            $img=request()->file('img')->getClientOriginalName();
            request()->file('img')->storeAs('assets',$user->id.'/'.$img,'');
            $user->update(['img'=>$img]);
        }
        return $user;
    }


 

}
