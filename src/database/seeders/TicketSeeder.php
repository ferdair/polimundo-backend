<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {

            Ticket::create([
                'origen' => $faker->city(),
                'destino' => $faker->city(),
                'precio' => $faker->randomFloat(2, 0, 10000),
            ]);
        }
    }
}
