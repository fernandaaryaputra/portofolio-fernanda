<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username'=>'admin',
                'name'=>'AkunAdmin',
                'email'=>'admin@gmail.com',
                'level'=>'admin',
                'password'=>Hash::make('123456')
            ],
            [
                'username'=>'admin1',
                'name'=>'AkunAdmin1',
                'email'=>'admin1@gmail.com',
                'level'=>'admin',
                'password'=>Hash::make('fernanda123')
            ],
            
            [
                'username'=>'user1',
                'name'=>'AkunUser1',
                'email'=>'user1@gmail.com',
                'level'=>'user',
                'password'=>Hash::make('123456')
            ],
            

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
