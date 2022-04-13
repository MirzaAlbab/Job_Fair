<?php

namespace Database\Seeders;

use App\Models\Partner;
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
        Partner::factory(30)->create();
        Careerfair::create([
            'title' => 'AOCF 35',
            'start_date' => '2022-01-01',
            'end_date' => '2022-01-01',
            'img' => 'https://res.cloudinary.com/dxd813fbq/image/upload/v1649813268/CareerFair/2022-04-13_012742_banner.png',
            'status' => 'active',
        ]);
        Careerfair::create([
            'title' => 'AOCF 36',
            'start_date' => '2022-01-01',
            'end_date' => '2022-01-01',
            'img' => 'https://res.cloudinary.com/dxd813fbq/image/upload/v1649830932/CareerFair/banner_yghi5p.jpg',
            'status' => 'active',
        ]);
        $this->call([
            EventSeeder::class,
            FaqSeeder::class,
            PartnerSeeder::class,
        ]);
    }
}
