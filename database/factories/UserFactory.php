<?php
use Faker\Generator as Faker;
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'nama'	=> $faker->name,
        'email'	=> $faker->unique()->safeEmail,
        'username'	=> $faker->unique()->name,
        'password'	=> '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
    ];
});