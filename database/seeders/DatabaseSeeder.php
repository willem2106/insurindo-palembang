<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SejarahSeeder::class,
            VisiMisiSeeder::class,
            OrganisasiSeeder::class,
            KantorPusatSeeder::class,
            KantorCabangSeeder::class,
            LaboratoriumSeeder::class,
            KalibrasiSeeder::class,
            LayananSeeder::class,
            KarirSeeder::class,
        ]);
    }
}
