<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $word= $faker->sentence;
    return [
        'name'=>$word,
        'slug'=>Str::slug($word),
    ];
});
