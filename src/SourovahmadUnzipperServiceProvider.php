<?php

namespace Sourovahmad\Unzipper;

use Illuminate\Support\ServiceProvider;


class SourovahmadUnzipperServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ .'/routes/web.php');
    }

    public function register()
    {


    }
}