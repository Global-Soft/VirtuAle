<?php

use Illuminate\Database\Seeder;

class TrabajosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 30) as $useless) {
            DB::table('trabajos')->insert([
                'id_empresa' => $faker->numberBetween(1, 10),
                'nombre' => $faker->bs,
                'fecha_inicio' => $faker->date('Y-m-d', 'now'),
            ]);
        }
    }
}
