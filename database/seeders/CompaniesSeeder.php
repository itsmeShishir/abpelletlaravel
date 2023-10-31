<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name'=>'Lalitpur Hatchery',
                'description'=>'The Cobb 500 is a popular breed of broiler chicken that is well known for its fast growth rate and high meat yield. When it comes to manufacturing good quality Cobb 500 chicken, several factors come into play, such as the breeding, raising, and feeding of the chickens. In this case, it is specified that pellet feed is being used to feed the chickens. Pellet feed is a type of feed that is formulated to contain all the essential nutrients and minerals that chickens need for growth and development. It is also designed to be easily digestible, which helps to promote optimal nutrient absorption and utilization. Overall, if the Cobb 500 chickens are raised under proper conditions, including using high-quality pellet feed, they can yield good quality meat that is both nutritious and flavorful.'
            ],
        ]);
    }
}
