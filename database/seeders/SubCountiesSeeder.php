<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SubCountiesSeeder extends Seeder
{
    public function run()
    {
        DB::table('sub_counties')->insert([
            // Baringo County
            ['county_id' => 1, 'name' => 'Baringo Central'],
            ['county_id' => 1, 'name' => 'Baringo North'],
            ['county_id' => 1, 'name' => 'Baringo South'],
            ['county_id' => 1, 'name' => 'Eldama Ravine'],
            ['county_id' => 1, 'name' => 'Mogotio'],
            ['county_id' => 1, 'name' => 'Tiaty'],
            
            // Bomet County
            ['county_id' => 2, 'name' => 'Bomet Central'],
            ['county_id' => 2, 'name' => 'Bomet East'],
            ['county_id' => 2, 'name' => 'Chepalungu'],
            ['county_id' => 2, 'name' => 'Konoin'],
            ['county_id' => 2, 'name' => 'Sotik'],
            
            // Bungoma County
            ['county_id' => 3, 'name' => 'Bumula'],
            ['county_id' => 3, 'name' => 'Kabuchai'],
            ['county_id' => 3, 'name' => 'Kanduyi'],
            ['county_id' => 3, 'name' => 'Kimilili'],
            ['county_id' => 3, 'name' => 'Mt. Elgon'],
            ['county_id' => 3, 'name' => 'Sirisia'],
            ['county_id' => 3, 'name' => 'Tongaren'],
            ['county_id' => 3, 'name' => 'Webuye East'],
            ['county_id' => 3, 'name' => 'Webuye West'],
            
            // Busia County
            ['county_id' => 4, 'name' => 'Bunyala'],
            ['county_id' => 4, 'name' => 'Butula'],
            ['county_id' => 4, 'name' => 'Matayos'],
            ['county_id' => 4, 'name' => 'Nambale'],
            ['county_id' => 4, 'name' => 'Samia'],
            ['county_id' => 4, 'name' => 'Teso North'],
            ['county_id' => 4, 'name' => 'Teso South'],

            // Elgeyo Marakwet County
            ['county_id' => 5, 'name' => 'Keiyo East'],
            ['county_id' => 5, 'name' => 'Keiyo South'],
            ['county_id' => 5, 'name' => 'Marakwet East'],
            ['county_id' => 5, 'name' => 'Marakwet West'],

            // Embu County
            ['county_id' => 6, 'name' => 'Embu East'],
            ['county_id' => 6, 'name' => 'Embu North'],
            ['county_id' => 6, 'name' => 'Embu West'],
            ['county_id' => 6, 'name' => 'Mbeere North'],
            ['county_id' => 6, 'name' => 'Mbeere South'],

            // Garissa County
            ['county_id' => 7, 'name' => 'Balambala'],
            ['county_id' => 7, 'name' => 'Dadaab'],
            ['county_id' => 7, 'name' => 'Fafi'],
            ['county_id' => 7, 'name' => 'Garissa'],
            ['county_id' => 7, 'name' => 'Hulugho'],
            ['county_id' => 7, 'name' => 'Ijara'],
            ['county_id' => 7, 'name' => 'Lagdera'],

            // Homa Bay County
            ['county_id' => 8, 'name' => 'Homa Bay Town'],
            ['county_id' => 8, 'name' => 'Kabondo Kasipul'],
            ['county_id' => 8, 'name' => 'Karachuonyo'],
            ['county_id' => 8, 'name' => 'Kasipul'],
            ['county_id' => 8, 'name' => 'Mbita'],
            ['county_id' => 8, 'name' => 'Ndhiwa'],
            ['county_id' => 8, 'name' => 'Rangwe'],
            ['county_id' => 8, 'name' => 'Suba'],

            // Isiolo County
            ['county_id' => 9, 'name' => 'Galbatulla'],
            ['county_id' => 9, 'name' => 'Isiolo'],
            ['county_id' => 9, 'name' => 'Merti'],

            // Kajiado County
            ['county_id' => 10, 'name' => 'Kajiado Central'],
            ['county_id' => 10, 'name' => 'Kajiado East'],
            ['county_id' => 10, 'name' => 'Kajiado North'],
            ['county_id' => 10, 'name' => 'Kajiado South'],
            ['county_id' => 10, 'name' => 'Kajiado West'],
            ['county_id' => 10, 'name' => 'Mashuuru'],
            ['county_id' => 10, 'name' => 'Oloililai'],

            // Kakamega County
            ['county_id' => 11, 'name' => 'Butere'],
            ['county_id' => 11, 'name' => 'Ikolomani'],
            ['county_id' => 11, 'name' => 'Khwisero'],
            ['county_id' => 11, 'name' => 'Likuyani'],
            ['county_id' => 11, 'name' => 'Lugari'],
            ['county_id' => 11, 'name' => 'Lurambi'],
            ['county_id' => 11, 'name' => 'Malava'],
            ['county_id' => 11, 'name' => 'Matungu'],

           // Kericho County
           ['county_id' => 12, 'name' => 'Ainamoi'],
           ['county_id' => 12, 'name' => 'Belgut'],
           ['county_id' => 12, 'name' => 'Bureti'],
           ['county_id' => 12, 'name' => 'Kipkelion East'],
           ['county_id' => 12, 'name' => 'Kipkelion West'],
           ['county_id' => 12, 'name' => 'Soin/Sigowet'],

           // Kiambu County
           ['county_id' => 13, 'name' => 'Gatundu North'],
           ['county_id' => 13, 'name' => 'Gatundu South'],
           ['county_id' => 13, 'name' => 'Githunguri'],
           ['county_id' => 13, 'name' => 'Juja'],
           ['county_id' => 13, 'name' => 'Kabete'],
           ['county_id' => 13, 'name' => 'Kiambaa'],
           ['county_id' => 13, 'name' => 'Kiambu Town'],
           ['county_id' => 13, 'name' => 'Kikuyu'],
           ['county_id' => 13, 'name' => 'Lari'],
           ['county_id' => 13, 'name' => 'Limuru'],
           ['county_id' => 13, 'name' => 'Ruiru'],
           ['county_id' => 13, 'name' => 'Thika Town'],

           // Kilifi County
           ['county_id' => 14, 'name' => 'Ganze'],
           ['county_id' => 14, 'name' => 'Kaloleni'],
           ['county_id' => 14, 'name' => 'Kilifi North'],
           ['county_id' => 14, 'name' => 'Kilifi South'],
           ['county_id' => 14, 'name' => 'Magarini'],
           ['county_id' => 14, 'name' => 'Malindi'],
           ['county_id' => 14, 'name' => 'Rabai'],

           // Kirinyaga County
           ['county_id' => 15, 'name' => 'Kirinyaga Central'],
           ['county_id' => 15, 'name' => 'Kirinyaga East'],
           ['county_id' => 15, 'name' => 'Kirinyaga West'],
           ['county_id' => 15, 'name' => 'Mwea East'],
           ['county_id' => 15, 'name' => 'Mwea West'],

           // Kisii County
           ['county_id' => 16, 'name' => 'Bobasi'],
           ['county_id' => 16, 'name' => 'Bomachoge Borabu'],
           ['county_id' => 16, 'name' => 'Bomachoge Chache'],
           ['county_id' => 16, 'name' => 'Bonchari'],
           ['county_id' => 16, 'name' => 'Kitutu Chache North'],
           ['county_id' => 16, 'name' => 'Kitutu Chache South'],
           ['county_id' => 16, 'name' => 'Nyaribari Chache'],
           ['county_id' => 16, 'name' => 'Nyaribari Masaba'],
           ['county_id' => 16, 'name' => 'South Mugirango'],

           // Kisumu County
           ['county_id' => 17, 'name' => 'Kisumu Central'],
           ['county_id' => 17, 'name' => 'Kisumu East'],
           ['county_id' => 17, 'name' => 'Kisumu West'],
           ['county_id' => 17, 'name' => 'Muhoroni'],
           ['county_id' => 17, 'name' => 'Nyakach'],
           ['county_id' => 17, 'name' => 'Nyando'],
           ['county_id' => 17, 'name' => 'Seme'],

           // Kitui County
           ['county_id' => 18, 'name' => 'Kitui Central'],
           ['county_id' => 18, 'name' => 'Kitui East'],
           ['county_id' => 18, 'name' => 'Kitui Rural'],
           ['county_id' => 18, 'name' => 'Kitui South'],
           ['county_id' => 18, 'name' => 'Kitui West'],
           ['county_id' => 18, 'name' => 'Mwingi Central'],
           ['county_id' => 18, 'name' => 'Mwingi North'],
           ['county_id' => 18, 'name' => 'Mwingi West'],

           // Kwale County
           ['county_id' => 19, 'name' => 'Kinango'],
           ['county_id' => 19, 'name' => 'Lunga Lunga'],
           ['county_id' => 19, 'name' => 'Matuga'],
           ['county_id' => 19, 'name' => 'Msambweni'],

           // Laikipia County
           ['county_id' => 20, 'name' => 'Kirima'],
           ['county_id' => 20, 'name' => 'Laikipia Central'],
           ['county_id' => 20, 'name' => 'Laikipia East'],
           ['county_id' => 20, 'name' => 'Laikipia North'],
           ['county_id' => 20, 'name' => 'Laikipia West'],
           ['county_id' => 20, 'name' => 'Nyahururu'],

           // Lamu County
           ['county_id' => 21, 'name' => 'Lamu East'],
           ['county_id' => 21, 'name' => 'Lamu West'],

           // Machakos County
           ['county_id' => 22, 'name' => 'Kangundo'],
           ['county_id' => 22, 'name' => 'Kathiani'],
           ['county_id' => 22, 'name' => 'Machakos Town'],
           ['county_id' => 22, 'name' => 'Masinga'],
           ['county_id' => 22, 'name' => 'Matungulu'],
           ['county_id' => 22, 'name' => 'Mavoko'],
           ['county_id' => 22, 'name' => 'Mwala'],
           ['county_id' => 22, 'name' => 'Yatta'],

           // Makueni County
           ['county_id' => 23, 'name' => 'Kaiti'],
           ['county_id' => 23, 'name' => 'Kibwezi East'],
           ['county_id' => 23, 'name' => 'Kibwezi West'],
           ['county_id' => 23, 'name' => 'Kilome'],
           ['county_id' => 23, 'name' => 'Makueni'],
           ['county_id' => 23, 'name' => 'Mbooni'],

           // Mandera County
           ['county_id' => 24, 'name' => 'Banisa'],
           ['county_id' => 24, 'name' => 'Kutulo'],
           ['county_id' => 24, 'name' => 'Lafey'],
           ['county_id' => 24, 'name' => 'Mandera Central'],
           ['county_id' => 24, 'name' => 'Mandera East'],
           ['county_id' => 24, 'name' => 'Mandera North'],
           ['county_id' => 24, 'name' => 'Mandera West'],

           // Marsabit County
           ['county_id' => 25, 'name' => 'Laisamis'],
           ['county_id' => 25, 'name' => 'Moyale'],
           ['county_id' => 25, 'name' => 'North Horr'],
           ['county_id' => 25, 'name' => 'Saku'],

           // Meru County
           ['county_id' => 26, 'name' => 'Buuri'],
           ['county_id' => 26, 'name' => 'Central Imenti'],
           ['county_id' => 26, 'name' => 'Igembe Central'],
           ['county_id' => 26, 'name' => 'Igembe North'],
           ['county_id' => 26, 'name' => 'Igembe South'],
           ['county_id' => 26, 'name' => 'North Imenti'],
           ['county_id' => 26, 'name' => 'South Imenti'],
           ['county_id' => 26, 'name' => 'Tigania East'],
           ['county_id' => 26, 'name' => 'Tigania West'],

           // Migori County
           ['county_id' => 27, 'name' => 'Awendo'],
           ['county_id' => 27, 'name' => 'Kuria East'],
           ['county_id' => 27, 'name' => 'Kuria West'],
           ['county_id' => 27, 'name' => 'Mabera'],
           ['county_id' => 27, 'name' => 'Ntimaru'],
           ['county_id' => 27, 'name' => 'Nyatike'],
           ['county_id' => 27, 'name' => 'Rongo'],
           ['county_id' => 27, 'name' => 'Suna East'],
           ['county_id' => 27, 'name' => 'Suna West'],
           ['county_id' => 27, 'name' => 'Uriri'],

           // Mombasa County
           ['county_id' => 28, 'name' => 'Changamwe'],
           ['county_id' => 28, 'name' => 'Jomvu'],
           ['county_id' => 28, 'name' => 'Kisauni'],
           ['county_id' => 28, 'name' => 'Likoni'],
           ['county_id' => 28, 'name' => 'Mvita'],
           ['county_id' => 28, 'name' => 'Nyali'],

           // Murang’a County
           ['county_id' => 29, 'name' => 'Gatanga'],
           ['county_id' => 29, 'name' => 'Kahuro'],
           ['county_id' => 29, 'name' => 'Kigumo'],
           ['county_id' => 29, 'name' => 'Kiharu'],
           ['county_id' => 29, 'name' => 'Kandara'],
           ['county_id' => 29, 'name' => 'Kangema'],
           ['county_id' => 29, 'name' => 'Mathioya'],
           ['county_id' => 29, 'name' => 'Murang’a South'],

           // Nairobi County
           ['county_id' => 30, 'name' => 'Dagoretti'],
           ['county_id' => 30, 'name' => 'Embakasi'],
           ['county_id' => 30, 'name' => 'Kamukunji'],
           ['county_id' => 30, 'name' => 'Kasarani'],
           ['county_id' => 30, 'name' => 'Kibra'],
           ['county_id' => 30, 'name' => 'Lang\'ata'],
           ['county_id' => 30, 'name' => 'Makadara'],
           ['county_id' => 30, 'name' => 'Mathare'],
           ['county_id' => 30, 'name' => 'Njiru'],
           ['county_id' => 30, 'name' => 'Starehe'],
           ['county_id' => 30, 'name' => 'Westlands'],

           // Nakuru County
           ['county_id' => 31, 'name' => 'Bahati'],
           ['county_id' => 31, 'name' => 'Gilgil'],
           ['county_id' => 31, 'name' => 'Kuresoi North'],
           ['county_id' => 31, 'name' => 'Kuresoi South'],
           ['county_id' => 31, 'name' => 'Molo'],
           ['county_id' => 31, 'name' => 'Naivasha'],
           ['county_id' => 31, 'name' => 'Nakuru Town East'],
           ['county_id' => 31, 'name' => 'Nakuru Town West'],
           ['county_id' => 31, 'name' => 'Njoro'],
           ['county_id' => 31, 'name' => 'Rongai'],
           ['county_id' => 31, 'name' => 'Subukia'],

                    // Nandi
            ['county_id' => 32, 'name' => 'Aldai'],
            ['county_id' => 32, 'name' => 'Chesumei'],
            ['county_id' => 32, 'name' => 'Emgwen'],
            ['county_id' => 32, 'name' => 'Mosop'],
            ['county_id' => 32, 'name' => 'Nandi Hills'],
            ['county_id' => 32, 'name' => 'Tinderet'],

            // Narok
            ['county_id' => 33, 'name' => 'Narok East'],
            ['county_id' => 33, 'name' => 'Narok North'],
            ['county_id' => 33, 'name' => 'Narok South'],
            ['county_id' => 33, 'name' => 'Narok West'],
            ['county_id' => 33, 'name' => 'Transmara East'],
            ['county_id' => 33, 'name' => 'Transmara West'],

            // Nyamira
            ['county_id' => 34, 'name' => 'Borabu'],
            ['county_id' => 34, 'name' => 'Manga'],
            ['county_id' => 34, 'name' => 'Masaba North'],
            ['county_id' => 34, 'name' => 'Nyamira North'],
            ['county_id' => 34, 'name' => 'Nyamira South'],

            // Nyandarua
            ['county_id' => 35, 'name' => 'Kinangop'],
            ['county_id' => 35, 'name' => 'Kipipiri'],
            ['county_id' => 35, 'name' => 'Ndaragwa'],
            ['county_id' => 35, 'name' => 'Ol-Jorok'],
            ['county_id' => 35, 'name' => 'Ol-Kalou'],

            // Nyeri
            ['county_id' => 36, 'name' => 'Kieni East'],
            ['county_id' => 36, 'name' => 'Kieni West'],
            ['county_id' => 36, 'name' => 'Mathira East'],
            ['county_id' => 36, 'name' => 'Mathira West'],
            ['county_id' => 36, 'name' => 'Mukurweini'],
            ['county_id' => 36, 'name' => 'Nyeri Town'],
            ['county_id' => 36, 'name' => 'Othaya'],
            ['county_id' => 36, 'name' => 'Tetu'],

            // Samburu
            ['county_id' => 37, 'name' => 'Samburu East'],
            ['county_id' => 37, 'name' => 'Samburu North'],
            ['county_id' => 37, 'name' => 'Samburu West'],

            // Siaya
            ['county_id' => 38, 'name' => 'Alego Usonga'],
            ['county_id' => 38, 'name' => 'Bondo'],
            ['county_id' => 38, 'name' => 'Gem'],
            ['county_id' => 38, 'name' => 'Rarieda'],
            ['county_id' => 38, 'name' => 'Ugenya'],
            ['county_id' => 38, 'name' => 'Ugunja'],

            // Taita Taveta
            ['county_id' => 39, 'name' => 'Mwatate'],
            ['county_id' => 39, 'name' => 'Taveta'],
            ['county_id' => 39, 'name' => 'Voi'],
            ['county_id' => 39, 'name' => 'Wundanyi'],

            // Tana River
            ['county_id' => 40, 'name' => 'Bura'],
            ['county_id' => 40, 'name' => 'Galole'],
            ['county_id' => 40, 'name' => 'Garsen'],

            // Tharaka Nithi
            ['county_id' => 41, 'name' => 'Maara'],
            ['county_id' => 41, 'name' => 'Meru South'],
            ['county_id' => 41, 'name' => 'Tharaka North'],
            ['county_id' => 41, 'name' => 'Tharaka South'],

            // Trans Nzoia
            ['county_id' => 42, 'name' => 'Cherengany'],
            ['county_id' => 42, 'name' => 'Endebess'],
            ['county_id' => 42, 'name' => 'Kiminini'],
            ['county_id' => 42, 'name' => 'Kwanza'],
            ['county_id' => 42, 'name' => 'Saboti'],

            // Turkana
            ['county_id' => 43, 'name' => 'Loima'],
            ['county_id' => 43, 'name' => 'Turkana Central'],
            ['county_id' => 43, 'name' => 'Turkana East'],
            ['county_id' => 43, 'name' => 'Turkana North'],
            ['county_id' => 43, 'name' => 'Turkana South'],
            ['county_id' => 43, 'name' => 'Turkana West'],

            // Uasin Gishu
            ['county_id' => 44, 'name' => 'Ainabkoi'],
            ['county_id' => 44, 'name' => 'Kapseret'],
            ['county_id' => 44, 'name' => 'Kesses'],
            ['county_id' => 44, 'name' => 'Moiben'],
            ['county_id' => 44, 'name' => 'Soy'],
            ['county_id' => 44, 'name' => 'Turbo'],

            // Vihiga
            ['county_id' => 45, 'name' => 'Emuhaya'],
            ['county_id' => 45, 'name' => 'Hamisi'],
            ['county_id' => 45, 'name' => 'Luanda'],
            ['county_id' => 45, 'name' => 'Sabatia'],
            ['county_id' => 45, 'name' => 'Vihiga'],

            // Wajir
            ['county_id' => 46, 'name' => 'Eldas'],
            ['county_id' => 46, 'name' => 'Tarbaj'],
            ['county_id' => 46, 'name' => 'Wajir East'],
            ['county_id' => 46, 'name' => 'Wajir North'],
            ['county_id' => 46, 'name' => 'Wajir South'],
            ['county_id' => 46, 'name' => 'Wajir West'],

            // West Pokot
            ['county_id' => 47, 'name' => 'Kacheliba'],
            ['county_id' => 47, 'name' => 'Kapenguria'],
            ['county_id' => 47, 'name' => 'Pokot South'],
            ['county_id' => 47, 'name' => 'Sigor'],
        ]);
    }
}
