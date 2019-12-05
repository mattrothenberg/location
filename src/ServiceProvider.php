<?php

namespace Mattrothenberg\Location;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [
        __DIR__.'/../dist/js/location.js',
    ];

    protected $fieldtypes = [
        \Mattrothenberg\Location\Location::class,
    ];
}
