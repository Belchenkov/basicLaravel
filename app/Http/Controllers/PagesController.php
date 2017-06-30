<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('home', ['title' => 'Home']);
    }

    public function getAbout()
    {
        return view('about', ['title' => 'About']);
    }

    public function getContact()
    {
        return view('contact', ['title' => 'Contact']);
    }
}
