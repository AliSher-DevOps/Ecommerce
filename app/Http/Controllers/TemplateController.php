<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function view_login_page()
    {
        return view('theme.login');
    }

     public function view_sign_up_page()
    {
        return view('theme.signup');
    }
}
