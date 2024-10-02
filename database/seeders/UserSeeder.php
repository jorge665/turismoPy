<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        User::create([
            'name' => 'admin',
            'email' => 'jorge6595@live.com',
            'password' => Hash::make('123456'),
            'rol' => 1
        ]);


    }
}
