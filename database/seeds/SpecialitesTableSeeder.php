<?php

use Illuminate\Database\Seeder;

class SpecialitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     factory(\App\Specialite::class, 3)->create();
    }
}
