<?php

namespace IBDesigner\GecadLiveUpdate\Facades;

use Illuminate\Support\Facades\Facade;

class LiveUpdate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'liveupdate';
    }
}
