<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function example(){
        return response()->json(['message' => 'Hello, World!', "section" => "K23YZ"]);
    }
}
