<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeController extends Controller
{
    //
    public function color($id){
        $colors = [
            0 => 'red',
            1 => 'green',
            2 => 'blue',
            3 => 'pink',
        ];
        
        $colorName = $colors[$id] ?? 'black';

        return view('color', [
            'color' => $colorName,
            'id' => $id
        ]);
    }
}
