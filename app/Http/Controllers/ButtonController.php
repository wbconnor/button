<?php

namespace App\Http\Controllers;

use App\Button;
use Input;

class ButtonController extends Controller
{

    public function __construct()
    {
        //
    }

    // load form to create a new resource
    public function create()
    {
        return view('create');
    }

    // store a new resource from form input
    public function store()
    {
        // get the form input
        $input = Input::all();

        // check if a button with the same name already exists
        if(!Button::where('name', $input['name'])->first())
        {
            // continue with creating a new button if one does not exist
            $button = Button::create($input);

            // send user to the new button
            return view('button', compact('button'));
        }
        else
        {
            // alert the  user that a button already exists
            // TODO: return to previous screen with data

            // display the existing button to the user
            dd(Button::where('name', $input['name'])->first());
        }
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

    public function show($name)
    {

        return view('button');
    }
}
