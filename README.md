# Mattrothenberg\Location
A Location Autocomplete Field for Statamic V3

<img src="https://res.cloudinary.com/practicaldev/image/fetch/s--pDwPXsoN--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://res.cloudinary.com/practicaldev/image/fetch/s--_7GFmoM---/c_imagga_scale%2Cf_auto%2Cfl_progressive%2Ch_420%2Cq_auto%2Cw_1000/https://thepracticaldev.s3.amazonaws.com/i/j2wje3wuclgtsrjg67f8.png" />

## Why?
The inspiration for publishing this addon came from writing the following blog post.

[https://dev.to/mattrothenberg/build-a-location-autocomplete-field-for-statamic-v3-49cp](https://dev.to/mattrothenberg/build-a-location-autocomplete-field-for-statamic-v3-49cp)

Co-locating a custom fieldtype within your Statamic app is one thing... Building an addon so that other folks can use it, too, is another. This is the fruit of my labor!

## Installation

(shamelessly cribbed from https://github.com/riasvdv/statamic-color-swatches)

Clone the Github repo somewhere, then add it to your composer.json's repositories array. (This is only necessary until the package is released.) Adjust the url to point to cloned directory.

```
"repositories": [
    {
        "type": "path",
        "url": "addons/mattrothenberg/location"
    }
]
```

Require it using Composer.

```
composer require mattrothenberg/location
```

Publish the assets

```
php artisan vendor:publish --provider="Mattrothenberg\Location\ServiceProvider"
```

Add two environment variables, since this library uses [Places.js](https://github.com/algolia/places) under the hood for location autocompletion.

```
PLACES_APP_ID=""
PLACES_API_KEY=""
```
