<?php

use App\Treno;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrenosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100 ; $i++) { 
            $newTreno = new Treno();
            $newTreno -> azienda = $faker->word();
            $newTreno -> stazione_di_partenza = $faker->city();
            $newTreno -> stazione_di_arrivo = $faker->city();
            $newTreno -> orario_partenza = $faker->time();
            $newTreno -> orario_arrivo = $faker->time();
            $newTreno -> data = $faker->date();
            $newTreno -> station_img = $faker->imageUrl(300,400,'station',true);
            $newTreno -> codice_treno = $faker->ean8();
            $newTreno -> numero_carrozze = $faker->randomDigit();
            $newTreno -> save();
        }
    }
}
