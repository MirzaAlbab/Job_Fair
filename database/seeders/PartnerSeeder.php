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
            'company' => 'perusahaan satu',
            'description' => 'perusahaan ke-satu',
            'careerfair_id' => 1,
            'position' => 'top',
            'img' => 'halo',
            'status' => 'inactive'
        ]);
    }
}
