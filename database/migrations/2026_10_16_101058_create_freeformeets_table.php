<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('freeformeets', function (Blueprint $table) {
            $table->id();

            $table->unsignedTinyInteger('day_of_week');
            // ISO weekday: Monday = 1, Sunday = 7

            $table->string('day_name')->nullable();

            $table->time('start_time');
            $table->time('end_time');

            $table->string('duration_minutes')
                ->default(60);

            $table->string('slots_per_day')->default(0);

            $table->boolean('is_active')->default(true);

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
        Schema::dropIfExists('freeformeets');
    }
};
