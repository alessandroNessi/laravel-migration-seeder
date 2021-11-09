<?php

use Illuminate\Database\Seeder;
use App\package;

class packagestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
    }
}
