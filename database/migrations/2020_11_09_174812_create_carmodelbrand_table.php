<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarModelBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CarModelBrand', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable($value = false);
            $table->integer('year')->length(4)->unsigned()->nullable($value = false);
            $table->enum('fuel',['diésel','gasolina','eléctrico'])->nullable($value = false);
            $table->integer('horsepower')->length(4)->unsigned()->nullable($value = true);
            $table->integer('doors')->length(1)->unsigned()->nullable($value = true);
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
        Schema::dropIfExists('CarModelBrand');
    }
}
