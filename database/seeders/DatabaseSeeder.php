<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CitiesTableSeeder::class);
        $this->call(FacilitiesTableSeeder::class);
        $this->call(FishTableSeeder::class);
        $this->call(FishesTableSeeder::class);
        $this->call(KnowledgesTableSeeder::class);
        $this->call(KnowledgeTypesTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(PlansTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(SpotsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}