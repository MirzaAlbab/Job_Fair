<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'title' => 'Event kedua',
            'description' => 'event kedua',
            'time' => '2020-01-01 17:00:00',
            'link' => 'disini',
            'status' => 'inactive'
        ]);
    }
}
