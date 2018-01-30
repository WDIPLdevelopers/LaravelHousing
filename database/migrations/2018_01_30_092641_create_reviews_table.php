<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reviewdate');
            $table->string('reviewbyid');
            $table->string('reviewtypeid');
            $table->string('programtypeid');
            $table->string('actiontypeid');
            $table->dateTime('efectiveactiondate');
            $table->dateTime('annualinceptiondate');
            $table->dateTime('failedinceptiondate');
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
        Schema::dropIfExists('reviews');
    }
}
