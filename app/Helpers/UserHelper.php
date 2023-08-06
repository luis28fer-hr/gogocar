<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserHelper 
{
    public $email, $password, $name;

    public function __construct($email, $password, $name)
    {
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
    }

    public function validateInput($auth=false)
    {
        $authEmailRule = $auth ? 'exists:users' : 'unique:users';
        $authNameRule = $auth ? 'nullable' : 'string';

        $validator = Validator::make(['email' => $this->email, 'password' => $this->password, 'name' => $this->name],
            [
                'name' => [$authNameRule],
                'email' => ['required', 'email:rfc,dns', $authEmailRule],
                'password' => ['required', 'string', Password::min(8)]
            ]
        );

        if($validator->fails())
        {
            return ['status' => false, 'message' => $validator->messages()];
        } else {
            return ['status' => true];
        }
    }

    public function register($deviceName)
    {
        $validate = $this->validateInput();

        if($validate['status'] == false)
        {
            return $validate;
        } else {
            $user = User::create(['email' => $this->email, 'password' => Hash::make($this->password), 'name' => $this->name]);
            $token = $user->createToken($deviceName)->plainTextToken;
            return ['status' => true, 'token' => $token, 'user' => $user];
        } 
    }

    public function login($deviceName)
    {
        $validate = $this->validateInput(true);

        if($validate['status'] == false)
        {
            return $validate;
        } else {
            $user = User::where('email', $this->email)->first();
            if(Hash::check($this->password, $user->password))
            {
                $token = $user->createToken($deviceName)->plainTextToken;
                return ['status' => true, 'token' => $token, 'user' => $user];
            } else {
                return ['status' => false, 'messages' => ['password' => 'Incorrect password']];
            }
        } 
    }    
}
