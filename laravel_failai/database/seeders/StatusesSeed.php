<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['name' => 'Naujas', 'type' => 'orders'],
            ['name' => 'Pateiktas', 'type' => 'orders'],
            ['name' => 'Patvirtintas', 'type' => 'orders'],
            ['name' => 'Atšauktas', 'type' => 'orders'],
            ['name' => 'Atlikta', 'type' => 'orders'],

            ['name' => 'Naujas', 'type' => 'payment'],
            ['name' => 'Pateiktas', 'type' => 'payment'],
            ['name' => 'Patvirtintas', 'type' => 'payment'],
            ['name' => 'Atšauktas', 'type' => 'payment'],
            ['name' => 'Atlikta', 'type' => 'payment'],

            ['name' => 'Aktyvus', 'type' => 'user'],
            ['name' => 'Neaktyvus', 'type' => 'user'],
            ['name' => 'Blokuotas', 'type' => 'user'],
            ['name' => 'Ištrintas', 'type' => 'user'],

            ['name' => 'Aktyvus', 'type' => 'product'],
            ['name' => 'Neaktyvus', 'type' => 'product'],
            ['name' => 'Ištrintas', 'type' => 'product'],

            ['name' => 'Aktyvi', 'type' => 'category'],
            ['name' => 'Neaktyvi', 'type' => 'category'],
            ['name' => 'Ištrinta', 'type' => 'category']
        ];

        foreach ($statuses as $status) {
            Status::updateOrCreate($status);
        }
    }
}
