<?php

namespace AbdulMajidCSE\LaravelMagicCode\Facades;

use Illuminate\Support\Facades\Facade;

class MagicCode extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'abdulmajidcse_magic_code';
    }
}