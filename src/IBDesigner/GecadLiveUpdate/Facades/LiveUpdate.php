<?php

namespace IBDesigner\GecadLiveUpdate\Facade;

use Illuminate\Support\Facades\Facade;

class LiveUpdate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'liveupdate';
    }
}
