<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mariyam',
            'email' => 'tp056480@mail.apu.edu.my',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'workplace' => 'Orc',
            'jobposition' => 'Developer',
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);
    }
}
