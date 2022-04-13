<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::create([
            'company' => 'BRI',
            'description' => 'BRI',
            'careerfair_id' => 1,
            'position' => '1',
            'status' => 'active'
        ]);
        Partner::create([
            'company' => 'Mandiri',
            'description' => 'Mandiri',
            'careerfair_id' => 1,
            'position' => '1',
            'status' => 'active'
        ]);
        Partner::create([
            'company' => 'Pegadaian',
            'description' => 'Pegadaian',
            'careerfair_id' => 1,
            'position' => '1',
            'status' => 'active'
        ]);
        Partner::create([
            'company' => 'Mega Persada Group',
            'description' => 'Mega Persada Group',
            'careerfair_id' => 1,
            'position' => '1',
            'status' => 'active'
        ]);
        Partner::create([
            'company' => 'TECHCONNECT academy',
            'description' => 'TECHCONNECT academy',
            'careerfair_id' => 1,
            'position' => '1',
            'status' => 'active'
        ]);
        Partner::create([
            'company' => 'Malindo',
            'description' => 'Malindo',
            'careerfair_id' => 1,
            'position' => '2',
            'status' => 'active'
        ]);
        Partner::create([
            'company' => 'AnterAja',
            'description' => 'AnterAja',
            'careerfair_id' => 1,
            'position' => '2',
            'status' => 'active'
        ]);
        Partner::create([
            'company' => 'LOreal',
            'description' => 'LOreal',
            'careerfair_id' => 1,
            'position' => '2',
            'status' => 'active'
        ]);
        Partner::create([
            'company' => 'Bank Muamalat',
            'description' => 'Bank Muamalat',
            'careerfair_id' => 1,
            'position' => '2',
            'status' => 'active'
        ]);
        Partner::create([
            'company' => 'PT Graha Mutu Persada',
            'description' => 'PT Graha Mutu Persada',
            'careerfair_id' => 1,
            'position' => '2',
            'status' => 'active'
        ]);
    }
}
