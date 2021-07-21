<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string', 
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken');

        $response = [
            'user' => $user,
            'token' => $token->accessToken,
            'status_code' => '0',
            'message' => 'created_successfully'
        ];

        return response($response, 201);
    }

    public function registeration(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'middle_name' => 'required|string',
            'surname' => 'required|string',
            'mobile_number' => 'required|integer',
            'alt_number' => 'required|integer',
            'id_number' => 'required|integer',
            'email_address' => 'required|string|unique:users,email',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'marital_status' => 'required|string',
            'name' => 'required|string',
            'referee' => 'required|string',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'middle_name' => $fields['middle_name'],
            'surname' => $fields['surnmame'],
            'mobile_number' => $fields['mobile_number'],
            'alt_number' => $fields['alt_number'],
            'id_number' => $fields['id_number'],
            'email_address' => $fields['email_address'],
            'date_of_birth' => $fields['date_of_birth'],
            'gender' => $fields['gender'],
            'marital_status' => $fields['marital_status'],
            'referee' => $fields['referee'],
        ]);

        $token = $user->createToken('registerationToken')->$plainTextToken;
    
        $response = [
            'user' => $user,
            'token' => $token,
            'message' => 'Client registered successfully'
        ];

        return response($response, 201);
    }
}
