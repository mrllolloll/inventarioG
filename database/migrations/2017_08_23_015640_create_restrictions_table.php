<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestrictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restrictions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('camptables_id')->unsigned();
            $table->foreign('camptables_id')->references('id')->on('camptables');
            $table->integer('objetive_id');
            $table->integer('afected_camptables_id')->unsigned();
            $table->foreign('afected_camptables_id')->references('id')->on('camptables');
            $table->string('default_option');
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
        Schema::dropIfExists('restrictions');
    }
}
