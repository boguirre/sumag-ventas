<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Bruno Aguirre',
            'email'=> 'baguirre@gmail.com',
            'password'=>('123456789')


        ])->assignRole('Admin');

        User::create([

            'name' => 'Carlos Aguirre',
            'email'=> 'bagui@gmail.com',
            'password'=>('123456789')

        ])->assignRole('Gerencia');

        User::create([

            'name' => 'Luis Aguirre',
            'email'=> 'baguirrero1@gmail.com',
            'password'=>('123456789')

        ])->assignRole('Vendedor');
    }
}
