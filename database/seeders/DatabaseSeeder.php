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
        // \App\Models\User::factory(10)->create();
        $this->call(DokterSeeder::class);
        $this->call(TempatTidurSeeder::class);
        $this->call(PasienSeeder::class);
        $this->call(PegawaiSeeder::class);
    }
}
