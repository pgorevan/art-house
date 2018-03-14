<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Picture::class, function (Faker $faker) {
    return [
        'title' => 'A Fake Title For An Painting',
        'url' => 'http://www.jennifer-anderson.co.uk/uploads/1/3/1/9/13191095/2376053_orig.jpg',
        'width' => '123',
        'height' => '123',
        'date_created' => Carbon::parse('-1 weeks'),
    ];
});
