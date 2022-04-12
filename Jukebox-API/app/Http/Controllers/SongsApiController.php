<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use Illuminate\Http\Request;

class SongsApiController extends Controller
{
    public function index()
    {
        return json_encode(Songs::all());
    }

    public function store()
    {
        return Songs::create([
            'title' => request('title'),
            'artist' => request('artist'),
            'album' => Request('album'),
        ]);
    }

    public function update(Songs $song)
    {
        return $song->update([
            'title' => request('title'),
            'artist' => request('artist'),
            'album' => Request('album'),
        ]);
    }

    public function destroy(Songs $song)
    {
        $succes = $song->delete();
        return json_encode($succes);
    }

    public function read(Songs $song)
    {
        return json_encode($song);
    }
}
