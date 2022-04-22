<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use App\Models\SongsFromPlaylists;
use Illuminate\Http\Request;

class SongsFromPlaylistsApiController extends Controller
{
    public function index()
    {
        return json_encode(SongsFromPlaylists::all());
    }

    public function store()
    {
        return SongsFromPlaylists::create([
            'playlist_id' => request('playlist'),
            'song_id' => request('song'),
        ]);
    }

    public function destroy(SongsFromPlaylists $song)
    {
        $succes = $song->delete();
        return json_encode($succes);
    }

    public function read($id)
    {
        $listOfSongs = [];
        $songs = SongsFromPlaylists::select('*')->where('playlist_id', '=', $id)->get();
        foreach ($songs as $song) {
            $s = Songs::select('*')->where('id', '=', $song['song_id'])->get();
            $s[0]['relation_id'] = $song['id'];
            array_push($listOfSongs, $s[0]);
        }
        return json_encode($listOfSongs);
    }
}
