<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Salf\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'departamento_id' => 5,
        'tipo' => 1,
        'remember_token' => str_random(10),
    ];
});

$factory->define(Salf\Entities\Departamento::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->sentence,
    ];
});


$factory->define(Salf\Entities\Sala::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->sentence,
    ];
});

$factory->define(Salf\Entities\Incidencia::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->sentence,
    ];
});

$factory->define(Salf\Entities\Motivo::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->colorName,
    ];
});

$factory->define(Salf\Entities\Horario::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->colorName,
    ];
});

$factory->define(Salf\Entities\Reserva::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'motivo_id' => $faker->numberBetween($min = 1, $max = 10),
        'data' => $faker->date($format = 'd/m/Y', $max = 'now'),
        'sala_id' => $faker->numberBetween($min = 1, $max = 10),
        'horario_id' => $faker->numberBetween($min = 1, $max = 15)
    ];
});
