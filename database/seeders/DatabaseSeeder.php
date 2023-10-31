<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserTableSeeder::class);
        $this->call(aboutSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(Distrinutionseeder::class);
        $this->call(SettingSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(TeamTableSeeder::class);
        $this->call(AssociationsSeeder::class);
        
        // \App\Models\User::factory(2)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
