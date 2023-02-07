<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate(
            [
                'email' => 'admin@example.com',
            ],
            [
                'name' => 'Admin',
                'password' => bcrypt('admin'),
            ]
        );

        Person::updateOrCreate(
            [
                'user_id' => $user->id,
                'email_address' => 'admin@email.com',
            ],
            [
                'first_name' => 'Admin',
                'second_name' => 'Admin',
                'personal_code' => '00000000000',
                'phone_number' => '000000000',
            ]
        );
    }
}
