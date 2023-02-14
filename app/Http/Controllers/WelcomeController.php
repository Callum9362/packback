<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $name = "World";
        if(!empty($request->get('name')))
        {
            $name = $request->get('name');
        }

        return view('welcome')->with('name', $name);
    }
}
