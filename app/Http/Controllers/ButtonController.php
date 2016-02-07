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
            return redirect('/b/'.$button->name);
        }
        else
        {
            // alert the  user that a button already exists

            $name = Button::where('name', $input['name'])->first()->name;
            $error_message = 'That button name is taken';

            return view('create', compact('name', 'error_message'));

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
        $button = Button::where('name', $name)->first();

        if($button->password)
            // how to store [authenticated] cookie
            // and if not [authenticated] prompt for a password again
            return redirect('find');
        else
            return view('button', compact('button'));

    }
}
