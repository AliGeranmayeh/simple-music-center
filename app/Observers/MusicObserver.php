<?php

namespace App\Observers;

use App\Models\Archive;
use App\Models\Music;

class MusicObserver
{
    public function deleted(Music $music)
    {
        Archive::create([
            'music_id'=>$music->id,
            'json_data'=>json_encode($music)
        ]);

    }
}
