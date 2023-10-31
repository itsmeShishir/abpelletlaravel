<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'photo' => '',
            'danatitle'=>'Suvham Dana',
            'author'=>'yuvraj b',
            'description'=>'Desire Educational Consultancy (Best Education Consultancy in Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the locality of Dillibazar, Kathmandu with an aim to provide effective study abroad counseling to the aspiring students who want to learn in excellent environment with multicultural experience and great lifestyle. We provide professional guidance for higher studies in Australia, New Zealand and USA.',
        ]);
    }
}
