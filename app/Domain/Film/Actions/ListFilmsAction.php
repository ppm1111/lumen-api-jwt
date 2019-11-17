<?php

namespace App\Domain\Film\Actions;

use App\Infrastructure\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Film\Services\FilmService;

class ListFilmsAction extends Controller
{
    protected $filmService;

    public function __construct(FilmService $filmService) {
        $this->filmService = $filmService;
    }

    public function __invoke()
    {
        return $this->filmService->listFilms();
    }
}
