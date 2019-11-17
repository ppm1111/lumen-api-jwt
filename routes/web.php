<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
// use App\Film;
// use App\Http\Resources\FilmResource;
// use Illuminate\Database\Eloquent\ModelNotFoundException;
// use App\Exceptions\custom\FilmNotFoundException;

/* 
function () use ($router) {
    return FilmResource::collection(Film::paginate());
}
*/

// try{
//     return new FilmResource(Film::where('film_id', 1)->firstOrFail());
// }catch(ModelNotFoundException $e) {
//     throw new FilmNotFoundException();
// }

$router->group(['prefix' => 'api'], function () use ($router) {
    // Matches "/api/register
    $router->post('register', 'User\Actions\RegisterAction');

     // Matches "/api/login
    $router->post('login', 'User\Actions\LoginAction');
});

$router->group(['prefix' => 'api', 'middleware' => 'auth'], function() use ($router){
    $router->get('/films/{id}', 'Film\Actions\GetFilmAction');
    $router->get('/films', 'Film\Actions\ListFilmsAction');
});
