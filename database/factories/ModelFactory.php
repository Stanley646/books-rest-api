<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Application;
use App\Models\ApplicationDetails;
use App\Models\ApplicationRole;
use App\Models\Book;
use App\Models\Role;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Book::class, function (Faker $faker) {

    return [
        'name' => $this->faker()->title,
        'isbn' => $this->faker()->isbn10,
        'authors' => $this->faker(randomNumber(2))->name,
        'number_of_pages' => $this->faker(numberBetween($min = 10, $max = 100))->number,
        'publisher' => $this->faker()->unique()->safemail,
        'country' => $this->faker()->country,
        'release_date' => $this->faker()->dateTime($max = '2020-11-01'),
    ];

});


