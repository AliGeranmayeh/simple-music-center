<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $musics = Music::all();
        return view('home',[
            'musics' => $musics
        ]);
    }
    public function delete(Request $request)
    {
        $storage = Storage::disk('music-center');

        $music=Music::find($request->delete);

        $storage->delete([$music->image,$music->music]);
//        Storage::delete("/$music->image");
//        Storage::delete("/$music->music");
        Music::destroy($request->delete);
        $musics = Music::all();
        return view('home',[
            'musics' => $musics
        ]);
    }
}
