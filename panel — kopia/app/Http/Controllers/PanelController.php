<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function WelcomePage ()
    {
        return view('panel.home');
    }
    public function FormPage  ()
    {
      return view('articles.form');
    }
}
