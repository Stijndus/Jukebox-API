<?php

namespace App\Http\Controllers;

use App\Models\Playlists;
use Illuminate\Http\Request;

class PlaylistsApiController extends Controller
{
    public function index()
    {
        return json_encode(Playlists::all());
    }

    public function store()
    {
        $image = request('image');
        if($image === null){
            $image = 'placeholder.png';
        }
        return Playlists::create([
            'title' => request('title'),
            'description' => request('description'),
            'image' => $image,
        ]);
    }

    public function update(Playlists $playlist)
    {
        $image = request('image');
        if($image === null){
            $image = 'placeholder.png';
        }
        return $playlist->update([
            'title' => request('title'),
            'description' => request('description'),
            'image' => $image,
        ]);
    }

    public function destroy(Playlists $playlist)
    {
        $succes = $playlist->delete();
        return json_encode($succes);
    }

    public function read(Playlists $playlist)
    {
        return json_encode($playlist);
    }
}

