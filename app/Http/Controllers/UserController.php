<?php
namespace App\Http\Controllers;

use App\Helpers\UserHelper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller 
{
    public function register(Request $request)
    {
        $response = (new UserHelper($request->email, $request->password, $request->name))->register($request->deviceName);
        return response()->json($response);
    }

    public function login(Request $request): JsonResponse
    {
        $response = (new UserHelper($request->email, $request->password, ''))->login($request->deviceName);
        return response()->json($response);
    }
}