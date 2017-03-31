<?php
    $factory->define(App\Brand::class, function (Faker\Generator $faker) {
        static $password;

        return [
            'brand' => $faker->word,
        ];
    });
