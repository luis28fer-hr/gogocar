@extends('Login/plantilla')
@section('Titulo', 'Login')
@section('contenidoLogin')

@if (session()->has('error_sesion'))
{!!"<script> Swal.fire({
    icon: 'error',
    title: 'Usuario no encontrado',
    text: 'Revise sus credenciales!',
    })</script> "!!}
@endif

@if (session()->has('newUser'))
{!!"<script> Swal.fire({
    icon: 'success',
    title: 'Se ha registrado correctamente',
    text: 'Ahora puede iniciar sesion!',
    })</script> "!!}
@endif


<div class="login">
    <div class="formulario-login">
        <form action="{{route('login.entrar')}}" method="POST">
            @csrf
            <div>
                <label for="">Correo:</label>
                <input type="email" name="email" placeholder="Ingrese su correo" value="{{old('email')}}">
                <span class="error">{{$errors->first('email')}}</span>
            </div>
            <div>
                <label for="">Contraseña:</label>
                <input type="password" name="password" placeholder="Ingrese su contraseña">
                <span class="error">{{$errors->first('password')}}</span>
            </div>
            <button>Ingresar</button>
        </form>
    </div>
</div>

@endsection
