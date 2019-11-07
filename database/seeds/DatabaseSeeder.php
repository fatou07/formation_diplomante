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
         $this->call(UsersTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
       $this->call(SpecialitesTableSeeder::class);
       $this->call(FormateursTableSeeder::class);

        $this->call(PiecesTableSeeder::class);
        $this->call(DiplomesTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
    }
}
