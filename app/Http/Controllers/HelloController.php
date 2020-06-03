<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function show($prenom,$age)
    {
          return view('hello',[
        'toto' => $prenom,
        'age'=> $age
    ]
    
    
    );
    }
}
