<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($a=1;$a <= 5; $a++){
            Users::create([
                'username' => 'admin' . $a,
                'email' => 'admin' . $a . '@mail.com',
                'password' => Hash::make('dsadsadsa'),
                'f_name' => 'Admin',
                'l_name' => 'Pusat ' . $a,
                'location' => 'jogja',
                'job_role' => 'IT Development',
                'role' => 'administrator'
            ]);
        }
    }
}
