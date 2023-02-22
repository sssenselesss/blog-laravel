<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function createArticle()
    {
        return view('add');
    }
}
