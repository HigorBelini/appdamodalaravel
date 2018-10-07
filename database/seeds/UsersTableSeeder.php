<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'name'      => 'Higor Belini',
            'email'     => 'belini.higor@gmail.com',
            'password'  => bcrypt('flamengo2015HB'),
        ]);
    }
}
