<?php

namespace App\Http\Controllers\payments\mpesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MpesaController extends Controller
{
    public function getAccessToken(){
        $url = env('MPESA_ENV') ==0
        ? ''
        : '';

        
    }
}
