<?php

use Illuminate\Database\Seeder;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 90) as $useless) {
            DB::table('documentos')->insert([
                'id_padre' => $faker->numberBetween(1, 30),
                'tipo_padre' => $faker->numberBetween(1, 2),
                'titulo' => $faker->streetName,
                'descripcion' => $faker->realText(50),
                'nombre_archivo' => $faker->slug(3).'.'.$faker->fileExtension,
                'peso' => $faker->numberBetween(10, 50000000),
            ]);
        }
    }
}
