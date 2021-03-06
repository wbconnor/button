<?php

namespace App\Http\Controllers;

use App\Button;
use Hash;
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
            // if password is submitted, hash it
            $input['password'] == "" ? $input['password'] = null : $input['password'] = Hash::make($input['password']);

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

    // lookup a button that exists already
    public function find()
    {
        return view('find');
    }

    // get the password of a protected button
    public function password($name)
    {
        if($name != '')
        {
            $button = Button::where('name', $name)->first();
        }
        else
        {
            $button = null;
        }

        return view('password', compact('button'));
    }

    // validate a users attempt to access to a protected button
    public function passwordValidate($name)
    {
        $input = Input::all();
        $button = Button::where('name', $name)->first();
        $pass = $button->password;

        // hash check compares the two hashed passwords together
        if (Hash::check($input['password'], $pass))
        {
            return view('button', compact('button'));
        }
        else
        {
            $error_message = 'sorry, that\'s not the password we have';
            return view('find', compact('name', 'error_message'));
        }


    }

    // basically just a wrapper for show()
    public function search()
    {
        $input = Input::all();
        return redirect('/b/'.$input['name']);
    }

    // check if button is protected, either send to validation or show button
    public function show($name)
    {
        $button = Button::where('name', $name)->first();

        if($button->password)
        {
            return redirect('/p/'.$button->name);
        }
        else
        {
            return view('button', compact('button'));
        }
    }

    public function click($name)
    {
        $button = Button::where('name', $name)->first();

        $clicks = $button->clicks;

        ++$clicks;

        $button->update(['clicks' => $clicks]);

        $response = ['clicks' => $clicks];

        return json_encode($response);
    }
}
