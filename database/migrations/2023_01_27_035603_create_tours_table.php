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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('last_name');
            $table->text('country');
            $table->text('language');
            $table->text('email');
            $table->text('phone');
            $table->text('emergency_name');
            $table->text('relationship');
            $table->text('menu_type');
            $table->text('allergies');
            $table->boolean('contact_me')->default(0);
            $table->text('tour_route');
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
        Schema::dropIfExists('tours');
    }
};
