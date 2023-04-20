<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class AddMusicController extends Controller
{
    public function index()
    {
        return view("addNewMusic");
    }

    public function store(Request $request)
    {
       $request->validate([
           'name' => 'required|string',
           'artist' => 'required|string',
           'description' => 'required|string',
           'image' => 'required|mimetypes:jpg,png,jpeg',
           'music' => 'required|mimetypes:mp3,mpeg'
       ]);

       

       $imageName = time().'-'.$request->name.'.'.$request->image->extension();
       $musicName =  time().'-'.$request->music.'.'.$request->music->extension();
       $request->image->move(public_path('uploads/images'),$imageName);
       $request->music->move(public_path('uploads/musics'),$musicName);

       Music::create([
        'name' => $request->name,
        'artist' => $request->artist,
        'description' => $request->description,
        'image' => $request->image,
        'music' => $request->music
       ]);

       return redirect()->route('home');
    }
}
