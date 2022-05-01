<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIController extends Controller
{
    function hello() {
        return response()->json([
            'message' => 'Chào cậu!'
        ]);
    }
}
