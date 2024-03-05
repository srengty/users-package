<?php
namespace Ftsda3\UsersPackage;

use Illuminate\Support\Facades\Facade as FacadesFacade;

class Facade extends FacadesFacade
{
    protected static function getFacadeAccessor()
    {
        return \Ftsda3\UsersPackage\UsersPackage::class;
    }
}
