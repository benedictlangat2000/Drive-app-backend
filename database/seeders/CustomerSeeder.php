<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $customers = [];

        for ($i = 1; $i <= 20; $i++) {
            $customers[] = [
                'first_name' => 'First' . $i,
                'last_name' => 'Customer' . $i,
                'phone_number' => '071234567' . $i,
                'pin' => 'PIN' . rand(1000, 9999),
                'gender' => rand(0, 1) ? 'male' : 'female',
                'email' => 'customer' . $i . '@example.com',
                'county_id' => rand(1, 47), // Assuming you have 47 counties
                'sub_county_id' => rand(1, 250), // Assuming 300 sub-counties
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('customers')->insert($customers);
    }
}
