<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Car', function (Blueprint $table) {
            $table->id();
            $table->integer('kilometers')->length(6)->unsigned()->nullable($value = false);
            $table->string('description', 255)->nullable($value = true);
            $table->string('imgurl', 255)->nullable($value = true);
            $table->float('price', 10, 2)->nullable($value = false);
            $table->integer('discountPercent')->length(2)->unsigned()->default(0)->nullable($value = false);
            $table->dateTime('discountStart_at')->nullable($value = true);
            $table->dateTime('discountEnd_at')->nullable($value = true);
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
        Schema::dropIfExists('Car');
    }
}
