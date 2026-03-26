<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function add($a, $b)
    {
        $result = $a + $b;
        return view('calculator', ['result' => $result]);
    }
    public function subtract($a, $b)
    {
        $result = $a - $b;
        return view('calculator', ['result' => $result]);
    }
    public function multiply($a, $b)
    {
        $result = $a * $b;
        return view('calculator', ['result' => $result]);
    }
    public function divide($a, $b)
    {
        if ($b == 0) {
            $result = 'Cannot divide by zero';
        } else {
            $result = $a / $b;
        }
        return view('calculator', ['result' => $result]);
    }
}
