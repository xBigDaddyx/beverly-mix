<?php

namespace Xbigdaddyx\BeverlyMix\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Xbigdaddyx\BeverlyMix\BeverlyMix
 */
class BeverlyMix extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Xbigdaddyx\BeverlyMix\BeverlyMix::class;
    }
}
