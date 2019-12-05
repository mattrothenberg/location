<?php

namespace Mattrothenberg\Location;

use Statamic\Fields\Fieldtype;

class Location extends Fieldtype
{
    protected $icon = 'pin';

    public function preload()
    {
        return [
            'placesAppId' => env('PLACES_APP_ID', false),
            'placesApiKey' => env('PLACES_API_KEY', false)
        ];
    }

    /**
     * The blank/default value
     *
     * @return array
     */
    public function defaultValue()
    {
        return null;
    }

    /**
     * Pre-process the data before it gets sent to the publish page
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }
}
