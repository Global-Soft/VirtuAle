<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminUserSeeder::class);
        $this->call(EmpresasSeeder::class);
        $this->call(TrabajosSeeder::class);
        $this->call(DocumentosSeeder::class);
        $this->call(PersonalSeeder::class);
    }
}
