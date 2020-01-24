<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Business;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Business::class, function (Faker $faker) {
    $name = $faker->firstName;
    return [
        //
        "name" => $name,
        "description" => $faker->sentence,
        "email" => $faker->email,
        "slug" => Str::slug($name),
        "telephone" => $faker->phoneNumber,
        "website" => $faker->url,
        "visits" => 0,
        "status" => true
    ];
});
