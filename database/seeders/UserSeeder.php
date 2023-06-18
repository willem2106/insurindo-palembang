<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                // User Admin
                DB::table('users')->insert([
                    'name' => "Admin 1",
                    'username' => "admin1",
                    'role' => "1",
                    'gambar_path' => "/assets/src/assets/img/logo.png",
                    'password' => Hash::make('palembang123'),
                ]);
                DB::table('users')->insert([
                    'name' => "Admin 2",
                    'username' => "admin2",
                    'role' => "1",
                    'gambar_path' => "/assets/src/assets/img/logo.png",
                    'password' => Hash::make('palembang123'),
                ]);
    }
}
