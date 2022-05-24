<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Maher\Counters\Models\Counter as ModelsCounter;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsCounter::create([
            'key' => 'number_of_user',
            'name' => 'User',
            'step' => 1,
            'value' => 0,
            'initial_value' => 0,  
        ]);
        
    }
}
