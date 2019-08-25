<?php

namespace LaravelHelpersHook;

use Illuminate\Support\ServiceProvider;

class LaravelHelpersHookServiceProvider extends ServiceProvider
{
    /**
     * summary
     */
    public function __construct()
    {
     	// Add routers
        app('router')->get('test', function () {
            return 'Hello Usman!';
        });   
    }
}