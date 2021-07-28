<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comentarios extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comentarios', 'fecha_comentario', 'id_usuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */


    public function usuario()
    {
        return $this->hasOne(User::class, 'id', 'id_usuario');
    }
}
