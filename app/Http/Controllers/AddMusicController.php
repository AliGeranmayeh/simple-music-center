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

        // dd($request->image,$request->music);
       $request->validate([
           'name' => 'required|string',
           'artist' => 'required|string',
           'description' => 'required',
           'image' => 'required|mimes:jpg,png,jpeg',
           'music' => 'required|mimes:mp3,mpeg'
       ]);

       

       $imageName = time().'-'.$request->name.'.'.$request->image->extension();
       $musicName =  time().'-'.$request->name.'.'.$request->music->extension();

       
       
       $request->image->move(public_path('uploads/images'),$imageName);
       $request->music->move(public_path('uploads/musics'),$musicName);

       Music::create([
        'name' => $request->name,
        'artist' => $request->artist,
        'description' => $request->description,
        'image' => "uploads/images/$imageName",
        'music' => "uploads/musics/$musicName"
       ]);

       return redirect()->route('home');
    }
}
