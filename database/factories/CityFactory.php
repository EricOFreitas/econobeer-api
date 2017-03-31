<?php
    $factory->define(App\City::class, function (Faker\Generator $faker) {
        static $password;

        return [
            'city' => $faker->word,
        ];
    });
