<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserHelper
{
    public $email, $password, $name, $matricula, $apellido_paterno, $apellido_materno, $telefono, $es_pasajero;

    public function __construct($email, $password, $name, $matricula, $apellido_paterno, $apellido_materno, $telefono, $es_pasajero)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->matricula = $matricula;
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
        $this->telefono = $telefono;
        $this->es_pasajero = $es_pasajero;
    }

    public function validateInput($auth = false)
    {
        $authEmailRule = $auth ? 'exists:users' : 'unique:users';
        $authNameRule = $auth ? 'nullable' : 'string';
        $authMatriculaRule = $auth ? 'nullable' : ['required', 'unique:users', 'numeric', 'max_digits:9', 'min_digits:9'];
        $authApellidoPRule = $auth ? 'nullable' : ['required', 'string'];
        $authApellidoMRule = $auth ? 'nullable' : ['required', 'string'];
        $authTelefonoRule = $auth ? 'nullable' : ['required', 'numeric', 'max_digits:10', 'min_digits:10'];
        $authPasajeroRule = $auth ? 'nullable' : ['required', 'boolean'];

        $validator = Validator::make(
            [
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
                'matricula' => $this->matricula,
                'apellido_paterno' => $this->apellido_paterno,
                'apellido_materno' => $this->apellido_materno,
                'telefono' => $this->telefono,
                'es_pasajero' => $this->es_pasajero,
            ],
            [
                'name' => [$authNameRule],
                'email' => ['required', 'email:rfc,dns', $authEmailRule],
                'password' => ['required', 'string', Password::min(8)],
                'matricula' => [$authMatriculaRule],
                'apellido_paterno' => [$authApellidoPRule],
                'apellido_materno' => [$authApellidoMRule],
                'telefono' => [$authTelefonoRule],
                'es_pasajero' => [$authPasajeroRule],
            ]
        );

        if ($validator->fails()) {
            return ['status' => false, 'message' => $validator->messages()];
        } else {
            return ['status' => true];
        }
    }

    public function register($deviceName)
    {
        $validate = $this->validateInput();

        if ($validate['status'] == false) {
            return $validate;
        } else {
            $user = User::create([
                'email' => $this->email, 
                'password' => Hash::make($this->password), 
                'name' => $this->name,
                'matricula' => $this->matricula,
                'apellido_paterno' => $this->apellido_paterno,
                'apellido_materno' => $this->apellido_materno,
                'telefono' => $this->telefono,
                'es_pasajero' => $this->es_pasajero
            ]);
            $token = $user->createToken($deviceName)->plainTextToken;
            return ['status' => true, 'token' => $token, 'user' => $user];
        }
    }

    public function login($deviceName)
    {
        $validate = $this->validateInput(true);

        if ($validate['status'] == false) {
            return $validate;
        } else {
            $user = User::where('email', $this->email)->first();
            if (Hash::check($this->password, $user->password)) {
                $token = $user->createToken($deviceName)->plainTextToken;
                return ['status' => true, 'token' => $token, 'user' => $user];
            } else {
                return ['status' => false, 'messages' => ['password' => 'Incorrect password']];
            }
        }
    }
}
