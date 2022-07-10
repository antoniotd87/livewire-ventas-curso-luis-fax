<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name'=>'Antonio',
            'email' =>'admin@admin.com',
            'password'=>Hash::make('123'),
            'profile'=>'ADMIN',
            'phone'=>543678,
            'status'=>'ACTIVE',
        ]);
        User::create([
            'name'=>'Melissa',
            'email' =>'admin1@admin.com',
            'password'=>Hash::make('123'),
            'profile'=>'EMPLOYEE',
            'phone'=>5436478,
            'status'=>'ACTIVE',
        ]);
    }
}
