<?php

use App\Http\Controllers\PlaylistsApiController;
use App\Http\Controllers\SongsApiController;
use App\Models\Songs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Songs Api Routes
Route::get('/songs', [SongsApiController::class, 'index']);
Route::get('/songs/{song}', [SongsApiController::class, 'read']);
Route::post('/songs', [SongsApiController::class, 'store']);
Route::put('/songs/{song}', [SongsApiController::class, 'update']);
Route::delete('/songs/{song}',  [SongsApiController::class, 'destroy']);

// Playlists Api Routes
Route::get('/playlists', [PlaylistsApiController::class, 'index']);
Route::get('/playlists/{playlist}', [PlaylistsApiController::class, 'read']);
Route::post('/playlists', [PlaylistsApiController::class, 'store']);
Route::put('/playlists/{playlist}', [PlaylistsApiController::class, 'update']);
Route::delete('/playlists/{playlist}',  [PlaylistsApiController::class, 'destroy']);
