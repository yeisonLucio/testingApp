<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Historia;
use Faker\Generator as Faker;

$factory->define(Historia::class, function (Faker $faker) {
    return [
        'nombre_historia' => $faker->word,
        'descripcion' => $faker->text($maxNbChars = 200),
        'codigo_historia' => $faker-> numerify('PDPS-###'),
        'servidor' => $faker -> randomFloat($nbMaxDecimals = 6, $min = 3, $max = 3),
        'proyecto_id' => function(){
            return factory(App\Models\Proyecto::class)->create()->id_proyecto;
        },
        'material_id' => function(){
            return factory(App\Models\Material::class)->create()->id_material;
        }
    ];
});
