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
        Schema::create('ai_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->longText('path');
            $table->longText('txt')->nullable();
            $table->longText('excel')->nullable();
            $table->longText('pdf')->nullable();
            $table->longText('base_file')->nullable();
            $table->text('status')->nullable();

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
        Schema::dropIfExists('ai_uploads');
    }
};
