<?php

namespace App\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    
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
        // $roles = $user->roles()->where('estado',1)->get(); //para activar el estado
          $roles = $user->roles()->get();
          if ($user->estado==1) {
              $user->setSession($roles->toArray()); //setsession agarra datos del usuario 
          } else {
              $this->guard()->logout();
              $request->session()->invalidate();
              return redirect('seguridad/login')->withErrors(['error' => ' Usuario inactivo']);
          }
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
