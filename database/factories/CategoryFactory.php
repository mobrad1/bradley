<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $categories = ["Web design","Software","Training"];
    return [
        //
        "name" => $categories[array_rand($categories)],
        "slug" => $categories[array_rand($categories)]
    ];
});
