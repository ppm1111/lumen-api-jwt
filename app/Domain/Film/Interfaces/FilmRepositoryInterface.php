<?php

namespace App\Domain\Film\Interfaces;

interface FilmRepositoryInterface{
    public function listFilms();

    public function getFilmById($id);
}