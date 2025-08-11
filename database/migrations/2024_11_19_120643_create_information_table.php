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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->longText('address')->nullable();
            $table->longText('professional_skills')->nullable();
            $table->longText('bio')->nullable();
            $table->longText('image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('languages')->nullable();
            $table->integer('experience_yr')->nullable();
            $table->longText('hobbies')->nullable();
            $table->date('dob')->nullable();
            $table->date('age')->nullable();
            $table->string('gender')->nullable();
            $table->integer('profile_completion_percentage')->nullable()->default(0); // 25%, 50%, 75%, 100%
            $table->string('department')->nullable();
            $table->string('is_active')->default(0)->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


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
        Schema::dropIfExists('information');
    }
};
