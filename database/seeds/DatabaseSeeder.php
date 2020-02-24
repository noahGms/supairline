<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\License::class, 10)->create();
        // $this->call(UsersTableSeeder::class);
        DB::table('employees_functions')->insert([
            'name' => 'Pilote'
        ]);
        DB::table('employees_functions')->insert([
            'name' => 'Hôtesse'
        ]);
        DB::table('employees_functions')->insert([
            'name' => 'Stewards'
        ]);
        DB::table('employees_functions')->insert([
            'name' => 'Autre'
        ]);
    }
}
