<?php

namespace App\Domain\Film\Actions;

use App\Infrastructure\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Film\Services\FilmService;

class GetFilmAction extends Controller
{
    protected $filmService;

    public function __construct(FilmService $filmService) {
        $this->filmService = $filmService;
    }

    public function __invoke($id)
    {
        return $this->filmService->getFilmById($id);
    }
}
