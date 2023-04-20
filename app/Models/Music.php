<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'artist',
        'description',
        'music',
        'image'
    ];
    public function getProfileImageUrlAttribute()
    {
        return Storage::disk('music-center')->url($this->image);
    }
    public function getMusicUrlAttribute()
    {
        return Storage::disk('music-center')->url($this->music);
    }
}
