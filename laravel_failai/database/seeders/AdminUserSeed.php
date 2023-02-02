<?php

namespace Database\Seeders;

use App\Models\People;
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

        People::updateOrCreate(
            [
                'user_id' => $user->id,
                'email' => 'admin@email.com',
            ],
            [
                'name' => 'Admin',
                'surname' => 'Admin',
                'personal_code' => '00000000000',
                'phone' => '000000000',
            ]
        );
    }
}
