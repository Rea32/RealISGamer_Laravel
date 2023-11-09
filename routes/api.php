<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
$url = 'https://api.rawg.io/api/games?key=de4d7ef946134f0381915b4db701d308';
function getJuegos(){
    $response = Http::withUrlParameters([
        'endpoint' => 'https://api.rawg.io/api/games',
        'key'=> 'de4d7ef946134f0381915b4db701d308',
        'page' => '',
    
    ])->get('{+endpoint}?key={key}');
    $juegos = json_decode($response);
    return $juegos->results;
}

$url = 'https://api.rawg.io/api/games?key=de4d7ef946134f0381915b4db701d308';
function getGeneros(){
    $response = Http::withUrlParameters([
        'endpoint' => 'https://api.rawg.io/api/genres',
        'key'=> 'de4d7ef946134f0381915b4db701d308',
        'page' => '',
    
    ])->get('{+endpoint}?key={key}');
    $generos = json_decode($response);
    return $generos->results;
}

