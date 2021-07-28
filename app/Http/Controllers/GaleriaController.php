<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\Comentarios;
use Illuminate\Support\Facades\Auth;

class GaleriaController extends Controller
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

        $collection_comentarios = Comentarios::with('usuario')->get();

        return view('auth.galeria' , ['comentarios'=>$collection_comentarios]);

    }

    public function guardarComentario(Request $request){
        Comentarios::create([
            'comentarios' => $request->comentario,
            'fecha_comentario' => date('Y-m-d H:i:s'),
            'id_usuario' => Auth::id(),
        ]);
        $collection_comentarios = Comentarios::with('usuario')->get();
        return view('auth.galeria' , ['comentarios'=>$collection_comentarios]);
    }


}
