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
        Schema::create('openings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('location');
            $table->string('type')->enum(['full-time', 'part-time', 'contract', 'internship'])->default('full-time');
            $table->string('salary')->nullable();
            $table->string('currency')->nullable();
            $table->string('status')->enum(['open', 'closed', 'upcoming'])->default('open');
            

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');

            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');

            $table->string('application_deadline')->nullable();
            $table->string('open_date')->nullable(); // by default, the date when the opening is created
            $table->string('applicants')->nullable();

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
        Schema::dropIfExists('openings');
    }
};
