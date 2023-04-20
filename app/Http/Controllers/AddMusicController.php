<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMusicController extends Controller
{
    public function index()
    {
        return view("addNewMusic");
    }

    public function store(Request $request)
    {
       
    }
}
