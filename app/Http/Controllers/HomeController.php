<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuario = User::find(Auth::id());
        return view('auth.perfil', [ 'usuario' => $usuario ]);
    }

    public function actualizarUsuario(Request $request){



        $array_user = array(
            'name' => $request->name,
            'email' => $request->email,
        );
        $password = $request->password;
        if($password) $array_user['password'] = Hash::make($password);

        if ($request->hasFile('file')) {
            $array_user['file_path'] = $request->file->hashName();
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
            $request->file->store('public');
            User::find(Auth::id())->update($array_user);
            $usuario = User::find(Auth::id());
            return view('auth.perfil', ['usuario' => $usuario , 'mostrar_notificacion' => true]);

        }

        User::find(Auth::id())->update($array_user);

        $usuario = User::find(Auth::id());
        return view('auth.perfil', compact( 'usuario'));

    }
}
