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
       Schema::create('clientformeets', function (Blueprint $table) {
            $table->id();

            $table->string('email')->index();

            $table->foreignId('freeformeet_id')
                ->constrained('freeformeets')
                ->cascadeOnDelete();

            $table->dateTime('starts_at');
            $table->dateTime('ends_at');

            $table->string('status')->default('confirmed');
            // pending, confirmed, cancelled, completed.

            $table->longText('notes')->nullable();

            $table->timestamps();

            $table->index(['starts_at', 'ends_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientformeets');
    }
};
