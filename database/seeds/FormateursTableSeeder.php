<?php

use Illuminate\Database\Seeder;

class FormateursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     factory(\App\Formateur::class, 10)->create(); 
    }
}
