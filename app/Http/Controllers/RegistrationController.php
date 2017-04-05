<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
    	return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
    	$form->persist();

    	return redirect()->home();
    }
}
