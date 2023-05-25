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
        Schema::create('vineyard_wine', function (Blueprint $table) {
            $table->unsignedBigInteger('vineyard_id');
            $table->unsignedBigInteger('wine_id');

            $table->foreign('vineyard_id')->references('id')->on('vineyards')->onDelete('cascade');
            $table->foreign('wine_id')->references('id')->on('wines')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vineyard_wine');
    }
};
