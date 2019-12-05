<?php

namespace Mattrothenberg\Location;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__.'/public/vendor/mattrothenberg/location.js'
    ];

    protected $fieldtypes = [
        \Mattrothenberg\Location\Location::class
    ];
}
