<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\package;

class packagestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newPackage = new package();
        $newPackage->package_name='mille e una notte';
        $newPackage->departure_date='1999-11-24';
        $newPackage->returning_date='2022-12-25';
        $newPackage->departure_place='milano-linate';
        $newPackage->landing_place='dubai-international-airport';
        $newPackage->arriving_place='petra';
        $newPackage->id_hotel='11';
        $newPackage->description='esperienza ventitreennale in una caverna di pietra da eremita dormendo sotto le stelle';
        $newPackage->save();
        for($i=0;$i<100;$i++){
            $newPackage = new package();
            $newPackage->package_name=$faker->name()."dream";
            $newPackage->departure_date= $faker->date('Y_m_d');
            $newPackage->returning_date= $faker->date('Y_m_d');
            $newPackage->departure_place=$faker->city()."-airport";
            $newPackage->landing_place=$faker->city()."-airport";
            $newPackage->arriving_place=$faker->city();
            $newPackage->id_hotel=$faker->numberBetween(0, 100);
            $newPackage->description=$faker->text();
            $newPackage->save();
        }
    }
}
