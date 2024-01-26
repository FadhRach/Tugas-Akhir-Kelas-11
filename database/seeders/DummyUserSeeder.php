<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Mas Admin',
                'email' => 'admin@example.com',
                'role' => 'admin',
                'password' => 'admin123',
                'photouser' => 'iconprofile.png',
                'id_eskul' => '1',
            ],
            [
                'name' => 'user',
                'email' => 'user@example.com',
                'role' => 'user',
                'password' => 'user123',
                'photouser' => 'iconprofile.png',
                'id_eskul' => '1',
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
