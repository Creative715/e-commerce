<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usaStates = [
            "AL" => 'Alabama',
            "AK" => 'Alaska',
            "AZ" => 'Arizona',
            "AR" => 'Arkansas',
            "CA" => 'California',
        ];
        $countries = [
            ['code' => 'ua', 'name' => 'Ukraine', 'states' => null],
            ['code' => 'pl', 'name' => 'Poland', 'states' => null],
            ['code' => 'uk', 'name' => 'United Kingdom', 'states' => null],
            ['code' => 'ger', 'name' => 'Germany', 'states' => null],
            ['code' => 'geo', 'name' => 'Georgia', 'states' => null],
            ['code' => 'usa', 'name' => 'United States of America', 'states' => json_encode($usaStates)],
        ];
        
        Country::insert($countries);
    }

}
