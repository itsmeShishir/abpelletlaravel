<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssociationsSeeder extends Seeder
{
      /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('associations')->insert([
            'photo' => '',
            'link'=>'https://www.google.com/',
        ]);
    }
}
