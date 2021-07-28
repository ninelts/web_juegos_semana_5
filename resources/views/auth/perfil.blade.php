
@extends('layouts.app')
@include('global.navbar_auth')

@yield('navbar')
<div class="container">
    @isset($mostrar_notificacion)

        // $records is defined and is not null...
    @endisset
<form action="{!! route('auth.actualizar_usuario') !!}"  method="post" enctype="multipart/form-data">
@csrf
<fieldset disabled class="mt-5">

    <div class="field">
        <label class="label">Rut</label>
        <div class="control">
            <input class="input" type="text" name="rut" placeholder="Rut" value="{{ $usuario->rut}}">
        </div>
    </div>

</fieldset>
    <div class="field">
        <label class="label">Nombre</label>
        <div class="control">
            <input class="input" type="text" name="name" placeholder="Nombre" value="{{$usuario->name}}" >
        </div>
    </div>

    <div class="field">
        <label class="label">Correo electronico</label>
        <div class="control">
            <input class="input" type="text" name="email" placeholder="Correo Electronico" value="{{ $usuario->email }}">
        </div>
    </div>
    <div class="field">
        <label class="label">Contraseña</label>
        <div class="control">
            <input class="input" type="password" name="password" placeholder="Password">
        </div>
    </div>
    <div class="file has-name is-fullwidth">
        <label class="file-label">
            <input class="file-input" type="file" name="file"
            <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>
            <span class="file-name">

    </span>
        </label>
    </div>
    <div class="field is-grouped mt-4">
        <div class="control">
            <button class="button is-link">Enviar</button>
        </div>

    </div>
    
</form>
        <div class="media-left">
            <figure class="image is-48x48">
                <img src="{{  asset('/storage/'. $usuario->file_path)}}" alt="Placeholder image">
            </figure>
        </div>

</div>
