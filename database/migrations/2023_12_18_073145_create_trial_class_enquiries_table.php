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
        Schema::create('trial_class_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('otp')->nullable();
            $table->string('email')->nullable();
            $table->string('course')->nullable();
            $table->string('batch')->nullable();
            $table->string('city')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('trial_class_enquiries');
    }
};
