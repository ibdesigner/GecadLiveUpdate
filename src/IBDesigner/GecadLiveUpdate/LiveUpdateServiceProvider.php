<?php namespace IBDesigner\GecadLiveUpdate;

use Illuminate\Support\ServiceProvider;

class LiveUpdateServiceProvider extends ServiceProvider {

    public function register()
    {

        $this->app['liveupdate'] = $this->app->share(function($app)
        {
            return new IBDesigner\GecadLiveUpdate\LiveUpdate;
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('LiveUpdate', 'IBDesigner\GecadLiveUpdate\LiveUpdate');
        });
    }
}