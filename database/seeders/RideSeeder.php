<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RideSeeder extends Seeder
{
    public function run()
    {
        $rides = [];

        for ($i = 1; $i <= 50; $i++) {
            $rides[] = [
                'customer_id' => rand(1, 20), // Assuming there are 20 customers
                'driver_id' => rand(1, 10),    // Assuming there are 10 drivers
                'pickup_point' => 'Pickup Point ' . $i,
                'dropoff_point' => 'Dropoff Point ' . $i,
                'passengers' => rand(1, 4), // Random passengers between 1 and 4
                'status' => $this->getRandomStatus(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('rides')->insert($rides);
    }

    private function getRandomStatus()
    {
        $statuses = ['requested', 'accepted', 'declined', 'completed', 'canceled'];
        return $statuses[array_rand($statuses)];
    }
}
