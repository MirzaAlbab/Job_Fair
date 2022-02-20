<?php

namespace Database\Seeders;

use App\Models\Faq;

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
        Faq::create([
            'question' => 'Pertanyaan pertama',
            'answer' => 'jawaban pertama',
            'status' => 'active'
        ]);
        Faq::create([
            'question' => 'Pertanyaan kedua',
            'answer' => 'jawaban kedua',
            'status' => 'inactive'
        ]);
        Faq::create([
            'question' => 'Pertanyaan ketiga',
            'answer' => 'jawaban ketiga',
            'status' => 'inactive'
        ]);
    }
}
