<?php

namespace Database\Seeders;

use App\Models\Careerfair;
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
        Careerfair::create([
            'title' => 'AOCF pertama',
            'start_date' => '2022-01-01',
            'end_date' => '2022-01-01',
        ]);
        Careerfair::create([
            'title' => 'AOCF dua',
            'start_date' => '2022-01-01',
            'end_date' => '2022-01-01',
        ]);
        $this->call([
            EventSeeder::class,
            FaqSeeder::class,
            PartnerSeeder::class,
        ]);
    }
}
