@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @auth
            <div class="card">
                <div class="card-header">{{ __('Configuración de Cuenta') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Cambia tu foto de perfil') }}
                </div>

                <div class="card-body">

                    <x-alert />

                    <form action="/upload" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <input type="submit" value="Enviar">
                    </form>
                </div>
                @endauth
                @guest
                <div class="card">
                    <div class="card-body">
                        <h5>TodoIt es una aplicación para que guardes tus tareas por hacer y no se te olvide nada! </h5>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    @endsection