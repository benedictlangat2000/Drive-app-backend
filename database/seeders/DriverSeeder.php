<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DriverSeeder extends Seeder
{
    public function run()
    {
        $drivers = [];

        for ($i = 1; $i <= 10; $i++) {
            $drivers[] = [
                'first_name' => 'First' . $i, // Add first name
                'last_name' => 'Driver' . $i, // Add last name
                'phone_number' => '071234567' . $i, // Example phone numbers
                'pin' => 'PIN' . rand(1000, 9999), // Example PIN
                'gender' => rand(0, 1) ? 'Male' : 'Female', // Random gender
                'email' => 'driver' . $i . '@example.com',
                'county_id' => rand(1, 47), // Assuming you have 47 counties in your counties table
                'sub_county_id' => rand(1, 250), // Assuming you have 300 subcounties in your subcounties table
                'status' => $this->getRandomStatus(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('drivers')->insert($drivers);
    }

    private function getRandomStatus()
    {
        $statuses = ['Online', 'Offline']; // Matching the enum defined in the migration
        return $statuses[array_rand($statuses)];
    }
}
