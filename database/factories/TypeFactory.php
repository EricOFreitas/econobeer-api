<?php
    $factory->define(App\Type::class, function (Faker\Generator $faker) {
        static $password;

        return [
            'type' => $faker->word,
        ];
    });
