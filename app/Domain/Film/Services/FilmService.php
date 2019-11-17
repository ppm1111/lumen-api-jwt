<?php

namespace App\Domain\Film\Services;

use App\Domain\Film\Repositories\FilmRepository;

class FilmService {
    
    protected $filmRepository;

    public function __construct(FilmRepository $filmRepository) {
        $this->filmRepository = $filmRepository;
    }

    public function listFilms() {
        return $this->filmRepository->listFilms();
    }

    public function getFilmById($id) {
        return $this->filmRepository->getFilmById($id);
    }
}