<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function submit(Request $request)
    {
        // Process the submitted form data
        $name = $request->input('name');
        $email = $request->input('email');

        // Perform additional actions (e.g., store data, send email, etc.)

        // Return a response
        return redirect('/')->with('success', 'Thank you for submitting the form!');
    }
}
