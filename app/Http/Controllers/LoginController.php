<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller {


    protected $username = 'username';
    protected $redirectTo = '/dashboard';
    protected $guard = 'web';

    public function login() {
        if (Auth::guard('web')->check()) {
            return redirect()->route('dashboard');
        }

        return view('home');
    }

    public function postLogin(Request $request) {

        $auth = Auth::guard('web')
                ->attempt([
            'email' => $request->username,
            'password' => $request->password,
            'statut' => 1]
        );

        if ($auth) {
          session()->flash('success','Bienvenu dans votre tableau de bord '.Auth::user()->first_name.' '.Auth::user()->last_name);

            return redirect()->route('dashboard');
        }
        session()->flash('error','Indentifiant incorrect, veuillez réesayer ou contactez les administrateurs');

        return redirect()->route('getlogin');
    }

    public function logout() {
        Auth::guard('web')->logout();

        return redirect()->route('main');
    }

}
