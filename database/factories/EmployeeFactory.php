<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        "name" => $faker->firstNameMale,
        "phone" => $faker->numberBetween($min = 1000, $max = 9000),
        "email" => $faker->companyEmail,
        "pass" => md5("123456")
    ];
});
