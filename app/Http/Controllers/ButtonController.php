<?php

namespace App\Http\Controllers;

use Input;

class ButtonController extends Controller
{

    public function __construct()
    {
        //
    }

    public function create()
    {
        return view('create');
    }

    public function find()
    {
        return view('find');
    }

    public function search()
    {
        $input = Input::all();
        dd($input);
    }
}
