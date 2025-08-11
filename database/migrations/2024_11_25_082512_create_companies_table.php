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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('company_email')->nullable();
            $table->string('country')->nullable();
            $table->longText('company_logo')->nullable();
            $table->longText('company_address')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_size')->nullable();
            $table->string('company_since')->nullable();
            $table->longText('company_description')->nullable();
            $table->string('company_sector')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
