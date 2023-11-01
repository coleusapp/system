<?php

namespace Coleus\System\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Coleus\System\System
 */
class System extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Coleus\System\System::class;
    }
}
