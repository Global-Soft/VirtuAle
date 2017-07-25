<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Global Boss',
            'email' => 'a@a.a',
            'password' => bcrypt('asdasd'),
        ]);
    }
}
