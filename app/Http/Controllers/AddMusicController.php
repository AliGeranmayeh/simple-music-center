<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use Illuminate\Support\Facades\Storage;

class AddMusicController extends Controller
{
    public function index()
    {
        return view("addNewMusic");
    }

    public function store(Request $request)
    {
        $storage = Storage::disk('music-center');

        // dd($request->image,$request->music);
       $request->validate([
           'name' => 'required|string',
           'artist' => 'required|string',
           'description' => 'required',
           'image' => 'required|mimes:jpg,png,jpeg',
           'music' => 'required|mimes:mp3,mpeg'
       ]);

       
       $path = date('Y/m/d');
       $imageName = time().'-'.$request->name.'.'.$request->image->extension();
       $musicName =  time().'-'.$request->name.'.'.$request->music->extension();
       
       $path_image=$storage->putFileAs("images/$path",$request->image,$imageName);
       $path_music =$storage->putFileAs("musics/$path",$request->music,$musicName);
       
    //    $request->image->move(public_path('images/'.$path),$imageName);
    //    $request->music->move(public_path('musics/'.$path),$musicName);

       Music::create([
        'name' => $request->name,
        'artist' => $request->artist,
        'description' => $request->description,
        'image' => $path_image,
        'music' => $path_music
       ]);

       return redirect()->route('home');
    }
}
