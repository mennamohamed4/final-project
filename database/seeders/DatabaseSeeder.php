<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@restaurant.com'],

            [
                'name' => 'Admin',
                'password' => Hash::make('admin123'), 
                'role' => 'admin',
                'phone' => '01234567890',
            ]
        );
        User::firstOrCreate(
            ['email' => 'waleed@restaurant.com'],

            [
                'name' => 'waleed',
                'password' => Hash::make('waleed123'), 
                'role' => 'customer',
                'phone' => '01234567891',
            ]
        );
        User::firstOrCreate(
            ['email' => 'osama@restaurant.com'],

            [
                'name' => 'osama',
                'password' => Hash::make('osama123'), 
                'role' => 'customer',
                'phone' => '01234567892',
            ]
        );
        User::firstOrCreate(
            ['email' => 'yusif@restaurant.com'],

            [
                'name' => 'yusif',
                'password' => Hash::make('yusif123'), 
                'role' => 'customer',
                'phone' => '01234567893',
            ]
        );
        User::firstOrCreate(
            ['email' => 'shimaa@restaurant.com'],

            [
                'name' => 'shimaa',
                'password' => Hash::make('shimaa123'), 
                'role' => 'customer',
                'phone' => '01234567894',
            ]
        );
        User::firstOrCreate(
            ['email' => 'menna@restaurant.com'],

            [
                'name' => 'menna',
                'password' => Hash::make('menna123'), 
                'role' => 'customer',
                'phone' => '01234567895',
            ]
        );



        
    }
}
