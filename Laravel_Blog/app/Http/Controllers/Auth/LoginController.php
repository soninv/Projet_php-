<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;

use App\User;
use Socialite;





class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function redirectToProvider($driver) {
        return Socialite::driver($driver)->redirect();
    }


    public function handleProviderCallback($driver) {
        try {
            $user = Socialite::driver($driver)->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
       
        // check if they're an existing user
         $existingUser = User::where('email', $user->getEmail())->first();

        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser = new User;
            $newUser->name = $user->getName();
            $newUser->email = $user->getEmail();
            $newUser->google_id = $user->getId();
            $newUser->password = Hash::make($user->getEmail());
            $newUser->save();
            auth()->login($newUser, true);
        }
        return redirect()->to($this->redirectTo);
    }

    
    }
