<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index(Request $request)
    {
        $name = "World";
        if(!empty($request->get('name')))
        {
            $name = $request->get('name');
        }

        return response()->json([
            'result' => 'ok',
            'msg' => 'Hello '.$name
        ]);
    }
}
