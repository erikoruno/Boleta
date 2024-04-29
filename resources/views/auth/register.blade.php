@extends('layouts.form')

@section('title', 'Registrate')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <!-- Authentication card start -->
            <div class="signup-card card-block auth-body mr-auto ml-auto">
                <form class="md-float-material" method="POST" action="{{ route('register') }}">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <div class="text-center">
                        <h1 class="text-dark">@yield('title', 'Bienvenidos')</h1>
                    </div>
                    <div class="auth-box">
                        <div class="row m-b-20">
                            
                            <div class="col-md-12">
                                <h3 class="text-center txt-primary">Ingresa tus datos</h3>
                            </div>
                        

                        </div>
                        <hr/>
                        <div class="input-group">
                            <input id="name" type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <span class="md-line"></span>
                        </div>

                          <div class="input-group">
                            <input id="apellidopaterno" type="text" class="form-control" placeholder="Apellido Paterno" name="apellidopaterno" value="{{ old('apellidopaterno') }}" required autocomplete="apellidopaterno" autofocus>
                            <span class="md-line"></span>
                          </div>

                          <div class="input-group">
                            <input id="apellidomaterno" type="text" class="form-control" placeholder="Apellido Materno" name="apellidomaterno" value="{{ old('apellidomaterno') }}" required autocomplete="apellidomaterno" autofocus>
                            <span class="md-line"></span>
                          </div>

                          <div class="input-group">
                            <input id="direccion" type="text" class="form-control" placeholder="Dirección" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>
                            <span class="md-line"></span>
                          </div>

                          <div class="input-group">
                            <input id="dni" type="text" class="form-control" placeholder="DNI" name="dni" value="{{ old('dni') }}" required maxlength="8" pattern="\d{8}" title="Debe contener exactamente 8 dígitos" autofocus>
                            <span class="md-line"></span>
                          </div>

                          
                        <div class="input-group">
                            <input id="email" type="text" class="form-control" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <span class="md-line"></span>
                        </div>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required autocomplete="new-password">
                            <span class="md-line"></span>
                        </div>
                        <div class="input-group">
                            <input id="password_confirmation" type="password" class="form-control" placeholder="Repetir contraseña" name="password_confirmation" required autocomplete="new-password">
                            <span class="md-line"></span>
                        </div>
                        
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Registrarse</button>
                            </div>
                        </div>
                        <hr/>
                        {{-- <div class="row">
                            <div class="col-md-10">
                                <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
                                <p class="text-inverse text-left"><b>Your Authentication Team</b></p>
                            </div>
                            <div class="col-md-2">
                                <img src="{{ asset('images/auth/Logo-small-bottom.png')}}" alt="small-logo.png">
                            </div>
                        </div> --}}
                    </div>
                </form>
                <!-- end of form -->
            </div>
            <!-- Authentication card end -->
        </div>
        <!-- end of col-sm-12 -->
    </div>
    <!-- end of row -->
</div>

@endsection
