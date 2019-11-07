<?php

use Illuminate\Database\Seeder;

class PiecesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    factory(\App\Piece::class, 10)->create();
    }
}
