@extends('layouts.form')

@section('title', 'Iniciar sesión')
@section('content')

{{-- Enlace para registrarse, solo por ADMIN --}}
{{-- <style>
   
    .top-right {
        position: absolute; 
        top: 0; 
        right: 0;
        padding: 10px; 
    }
</style>
<head>
    <nav class="top-right">
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
    @endif
    </nav>
</head> --}}

<!-- Authentication card start -->
<div class="login-card card-block auth-body mr-auto ml-auto">
    
    <form class="md-float-material" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-center">
            <h1 class="text-dark">@yield('title', 'Bienvenidos')</h1>
        </div>
    <div class="auth-box">
        <div class="row m-b-20">
            <div class="col-md-12">
                <h3 class="text-left txt-primary">Ingrese sus credenciales para acceder al sistema Boletas
                    de Pago - UTEA
                </h3>
            </div>
        </div>
        <hr/>
        <div class="input-group">
            <input type="dni" class="form-control" placeholder="Ingresa DNI" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>
            <span class="md-line"></span>
        </div>
        <div class="input-group">
            <input type="password" class="form-control" placeholder="Contraseña" name="password" required autocomplete="current-password">
            <span class="md-line"></span>
        </div>
        {{-- <div class="row m-t-25 text-left">
            <div class="col-sm-7 col-xs-12">
                <div class="checkbox-fade fade-in-primary">
                    <label>
                        <input type="checkbox" value="">
                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                        <span class="text-inverse">Remember me</span>
                    </label>
                </div>
            </div>
            <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                <a href="auth-reset-password.html" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>
            </div>
        </div> --}}
        <div class="row m-t-30">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Iniciar sesión</button>
                <p class="text-inverse text-left m-b-0">Si no tiene cuenta comuniquesé con el administrador del sistema
                </p>
            </div>
        </div>
        
        <div class="row m-t-30">
        <hr/>
        <div class="row">
            <div class="col-md-10">
                
                <p class="text-inverse text-left m-b-0">©Derechos reservados 2024 - UTEA - Versión 0.0.1</p>
                {{-- <p class="text-inverse text-left"><b>Your Authentication Team</b></p> --}}
            </div>
            <div class="col-md-2">
                <img src="{{ asset('images/auth/Logo-small-bottom.png')}}" alt="small-logo.png">
            </div>
        </div>
    
    </div>
    </form>
                            
                            <!-- end of form -->
   </div>

<!-- Authentication card end -->


@endsection
