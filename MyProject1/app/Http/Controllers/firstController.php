<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
    //
    public function show()
    {
        // $courses = ['PHP', 'JavaScript', 'Python'];
        // return view('first', ['courses' => $courses]);
        return view('first', ['courses' => ['PHP', 'JavaScript', 'Python']]);
    }
    public function display($id)
    {
        $users = ['Alice', 'Bob', 'Charlie'];
        return view('second', ['id' => $id, 'users' => $users]);
    }
}
