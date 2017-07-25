<?php

use Illuminate\Database\Seeder;

class EmpresasSeeder extends Seeder
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
            DB::table('empresas')->insert([
                'rut' => $faker->numberBetween(55000000, 99000000),
                'nombre_empresa' => $faker->company,
                'nombre_planta' => $faker->city,
            ]);
        }
    }
}
