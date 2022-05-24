<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password'=> '$2y$10$Fz4h8C5JDHNPJ3zb4rq/7epCGnoIj5kpE.Hzdq/1D67MQeH8l/o0m',
            'role' => 'superAdmin',
            'status' => 'active'
        ]);
        
    }
}
