<?php

namespace App\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    use AuthenticatesUsers;
    protected $redirectTo = '/admin';
     public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index()
    {
        return view('Seguridad.index');
    }

      protected function authenticated(Request $request, $user)
    {
        // $roles=$user->roles()->get();
         //$user->setSession(); 
    }
   

    public function username()
    {
        return 'usuario';
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('seguridad/login');
    }
   
}
