<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerFairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_fairs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable()->default(null);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('img')->nullable()->default(null);
            $table->foreignId('user_id')->constrained();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('career_fairs');
    }
}
