<?php


namespace Sourovahmad\Unzipper\Facades;
use Illuminate\Support\Facades\Facade;
use Sourovahmad\Unzipper\Controllers\UnzipperControlSection;

class SourovahmadUnzipper extends Facade
{
   protected static function getFacadeAccessor()
    {
         return new UnzipperControlSection();
    }

}


  