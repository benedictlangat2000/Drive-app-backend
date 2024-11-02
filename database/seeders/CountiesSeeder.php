<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class CountiesSeeder extends Seeder
{
    public function run()
    {
        DB::table('counties')->insert([
            ['id' => 1, 'name' => 'Baringo'],
            ['id' => 2, 'name' => 'Bomet'],
            ['id' => 3, 'name' => 'Bungoma'],
            ['id' => 4, 'name' => 'Busia'],
            ['id' => 5, 'name' => 'Elgeyo Marakwet'],
            ['id' => 6, 'name' => 'Embu'],
            ['id' => 7, 'name' => 'Garissa'],
            ['id' => 8, 'name' => 'Homa Bay'],
            ['id' => 9, 'name' => 'Isiolo'],
            ['id' => 10, 'name' => 'Kajiado'],
            ['id' => 11, 'name' => 'Kakamega'],
            ['id' => 12, 'name' => 'Kericho'],
            ['id' => 13, 'name' => 'Kiambu'],
            ['id' => 14, 'name' => 'Kilifi'],
            ['id' => 15, 'name' => 'Kirinyaga'],
            ['id' => 16, 'name' => 'Kisii'],
            ['id' => 17, 'name' => 'Kisumu'],
            ['id' => 18, 'name' => 'Kitui'],
            ['id' => 19, 'name' => 'Kwale'],
            ['id' => 20, 'name' => 'Laikipia'],
            ['id' => 21, 'name' => 'Lamu'],
            ['id' => 22, 'name' => 'Machakos'],
            ['id' => 23, 'name' => 'Makueni'],
            ['id' => 24, 'name' => 'Mandera'],
            ['id' => 25, 'name' => 'Marsabit'],
            ['id' => 26, 'name' => 'Meru'],
            ['id' => 27, 'name' => 'Migori'],
            ['id' => 28, 'name' => 'Mombasa'],
            ['id' => 29, 'name' => 'Murang’a'],
            ['id' => 30, 'name' => 'Nairobi'],
            ['id' => 31, 'name' => 'Nakuru'],
            ['id' => 32, 'name' => 'Nandi'],
            ['id' => 33, 'name' => 'Narok'],
            ['id' => 34, 'name' => 'Nyamira'],
            ['id' => 35, 'name' => 'Nyandarua'],
            ['id' => 36, 'name' => 'Nyeri'],
            ['id' => 37, 'name' => 'Samburu'],
            ['id' => 38, 'name' => 'Siaya'],
            ['id' => 39, 'name' => 'Taita Taveta'],
            ['id' => 40, 'name' => 'Tana River'],
            ['id' => 41, 'name' => 'Tharaka Nithi'],
            ['id' => 42, 'name' => 'Trans Nzoia'],
            ['id' => 43, 'name' => 'Turkana'],
            ['id' => 44, 'name' => 'Uasin Gishu'],
            ['id' => 45, 'name' => 'Vihiga'],
            ['id' => 46, 'name' => 'Wajir'],
            ['id' => 47, 'name' => 'West Pokot'],
        ]);
    }
};
