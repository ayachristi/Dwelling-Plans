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
        Schema::create('storey', function (Blueprint $table) {
            $table->bigIncrements('storey_id');
            $table->string('perspective_3d_price');
            $table->string('floor_plan_price');
            $table->string('interior_price');
            $table->string('full_set_price');
            $table->string('floor_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storey');
    }
};