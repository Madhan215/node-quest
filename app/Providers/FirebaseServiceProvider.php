<?php

namespace App\Providers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Illuminate\Support\ServiceProvider;

class FirebaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Auth::class, function ($app) {
            return (new Factory)
                ->withServiceAccount(config('firebase.credentials'))
                ->createAuth();
        });
    }
}
