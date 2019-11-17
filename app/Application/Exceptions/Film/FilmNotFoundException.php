<?php

namespace App\Application\Exceptions\Film;

use Exception;

class FilmNotFoundException extends Exception
{
    protected $message = '找不到Film';
}