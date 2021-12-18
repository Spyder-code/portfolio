<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(1)->create();
        \App\Models\Review::factory(18)->create();

        $this->call([
            ReviewSeeder::class,
            CategorySeeder::class,
            LabelSeeder::class,
        ]);
    }
}