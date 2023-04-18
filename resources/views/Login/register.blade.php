@extends('Login/plantilla')
@section('Titulo', 'Registrate')
@section('contenidoLogin')



@if (session()->has('error'))
{!!"<script> Swal.fire({
    icon: 'error',
    title: 'Algo salio mal :/',
    text: 'Intentelo nuevamente!',
    })</script> "!!}
@endif

<div class="login">
    <div class="formulario-registrar">
        <form action="{{route('registrate.user')}}" method="POST">
            @csrf
            <div class="datos">
                <div>
                    <label for="">Matricula:</label>
                    <input type="text" name="matricula" placeholder="Matricula" value="{{old('matricula')}}">

                </div>
                <div>
                    <label for="">Correo:</label>
                    <input type="email" name="email" placeholder="Correo electronico" value="{{old('email')}}">

                </div>
            </div>
            <div class="errors">
                <div>
                    <span class="error">{{$errors->first('matricula')}}</span>
                </div>
                <div>
                    <span class="error">{{$errors->first('email')}}</span>
                </div>

            </div>

            <div class="datos">
                <div>
                    <label for="">Nombre Completo:</label>
                    <input type="text" name="nombre" placeholder="Nombre/s" value="{{old('nombre')}}">
                </div>
            </div>
            <div class="errors">
                <div>
                    <span class="error">{{$errors->first('nombre')}}</span>
                </div>
            </div>

            <div class="datos">
                <div>
                    <input type="text" name="apellido_p" placeholder="Apellido Paterno" value="{{old('apellido_p')}}">
                </div>
                <div>
                    <input type="text" name="apellido_m" placeholder="Apellido Materno" value="{{old('apellido_m')}}">
                </div>
            </div>
            <div class="errors">
                <div>
                    <span class="error">{{$errors->first('apellido_p')}}</span>

                </div>
                <div>
                    <span class="error">{{$errors->first('apellido_m')}}</span>

                </div>
            </div>

            <div class="datos">
                <div>
                    <label for="">Telefono:</label>
                    <input type="text" name="telefono" placeholder="Número de telefono" value="{{old('telefono')}}">
                </div>
            </div>
            <div class="errors">
                <div>
                    <span class="error">{{$errors->first('telefono')}}</span>
                </div>
            </div>

            <div class="datos">
                <div>
                    <label for="Contraseña">Contraseña</label>
                    <input type="password" name="password" placeholder="Nueva contraseña">
                </div>
                <div>
                    <label for="Confirmar">Confirmar</label>
                    <input type="password" name="password_confirmation" placeholder="Confirme su contraseña">
                </div>
            </div>
            <div class="errors">
                <div>
                    <span class="error">{{$errors->first('password')}}</span>
                </div>
                <div>
                    <span class="error">{{$errors->first('password_confirmation')}}</span>
                </div>
            </div>


            <button>Registrarse</button>
        </form>
    </div>
</div>

@endsection
