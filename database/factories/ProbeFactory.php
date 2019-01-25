<?php

use Faker\Generator as Faker;


$factory->define(App\Probe::class, function (Faker $faker) {
    return [];
});

$factory->afterCreating(App\Probe::class, function (App\Probe $probe, Faker $faker) {
    for ($i = 0; $i < 5e3; $i++) {
        $probe->measurements()->save(factory(App\ProbeMeasurement::class)->make());
    }
});