<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
