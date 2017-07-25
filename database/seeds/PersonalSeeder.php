<?php

use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 10) as $useless) {
            DB::table('personal')->insert([
                'rut'               => $faker->numberBetween(1000000, 25000000),
                'nombre'            => $faker->firstName,
                'apellido_paterno'  => $faker->lastName,
                'apellido_materno'  => $faker->lastName,
                'correo'            => $faker->email,
                'telefono'          => $faker->numberBetween(100000000, 999999999),
            ]);
        }
    }
}
