<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('admins')->insert([
                'name' => 'Medjuil',
                'email' => 'admins@mail.com',
                'position' => 'Tutor',
                'password' => Hash::make('another_admin')
            ]);
    }
}
