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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->datetime('report_date');
            $table->integer('total_meals_count')->default(0);
            $table->integer('food_rating')->default(0);
            $table->integer('total_water_ounces')->default(0);
            $table->datetime('next_meal_time')->nullable();
            $table->text('grateful_description')->nullable();
            $table->text('activity_description')->nullable();
            $table->text('thoughts')->nullable();
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
        Schema::dropIfExists('reports');
    }
};
