<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            userSeeder ::class
        ]);
        \App\Models\User::factory(100)->create();


    }
}
