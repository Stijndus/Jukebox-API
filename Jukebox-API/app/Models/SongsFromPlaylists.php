<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongsFromPlaylists extends Model
{
    use HasFactory;
    protected $fillable = [
        'song_id',
        'playlist_id'
    ];
}
