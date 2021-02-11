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
        $this->call(PaysTableSeeder::class);
        $this->call(CommuneMartiniqueTableSeeder::class);

        factory(\App\Contact::class, 30)->create();
    }
}
