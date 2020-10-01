<?php
namespace App\Services\Information;
use Illuminate\Support\Facades\Facade;
class InfoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Info';
    }
}