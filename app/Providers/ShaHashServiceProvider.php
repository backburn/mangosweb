<?php
/**
 * Created by PhpStorm.
 * User: backb
 * Date: 11/11/2016
 * Time: 5:44 PM
 */

namespace App\Providers;

use App\ShaHasher;
use Illuminate\Hashing\HashServiceProvider;

class ShaHashServiceProvider extends HashServiceProvider {

    public function register()
    {
        $this->app->singleton('hash', function() { return new ShaHasher; });
    }

}