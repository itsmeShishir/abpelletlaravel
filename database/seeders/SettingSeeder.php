<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title'=>'Desire Conseltency',
            'meta_description'=>'Desire Conseltency',
            'meta_keywords'=>'Desire Conseltency',
            'logo'=>'',
            'favicon'=>'favicon.png',
            'header_email'=>'admissions@desireedunepal.com',
            'header_phone'=>'+977-4428538',
            'facebook'=>'https://www.facebook.com/desireedunepal',
            'twitter'=>'https://twitter.com/desireedunepal',
            'instagram'=>'https://www.instagram.com/desireedunepal',
            'linkend'=>'https://www.instagram.com/desireedunepal',
            'companydesc'=>'P.O.BOX: 8954, KATHAMNDU, NEPAL, 44600',
            'connectwithus'=>'info@desireconsultancy.com',
            'footer_logo'=>'',
        ]);
    }
}
