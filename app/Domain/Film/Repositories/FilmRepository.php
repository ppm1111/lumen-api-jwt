<?php

namespace App\Domain\Film\Repositories;
use App\Domain\Film\Interfaces\FilmRepositoryInterface;
use App\Domain\Film\Models\Film;
use App\Domain\Film\Resources\FilmResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Application\Exceptions\Film\FilmNotFoundException;

class FilmRepository implements FilmRepositoryInterface{

    public function listFilms() {
        return FilmResource::collection(Film::paginate());
    }

    public function getFilmById($id) {
        try{
            return new FilmResource(Film::where('film_id', $id)->firstOrFail());
        }catch(ModelNotFoundException $e) {
            throw new FilmNotFoundException();
        }
    }
}