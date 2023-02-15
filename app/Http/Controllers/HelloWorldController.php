<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        return response()->json([
            'result' => 'ok',
            'message' => 'Hello World'
        ]);
    }
}
