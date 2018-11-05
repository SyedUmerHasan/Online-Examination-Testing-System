<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTestResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_test_result', function (Blueprint $table) {
            $table->increments('user_test_result_id');
            $table->bigInteger('user_id');
            $table->text('test_category');
            $table->bigInteger('correctanswers')->default(0);
            $table->bigInteger('wronganswers')->default(0);
            $table->bigInteger('skipanswers')->default(0);
            $table->bigInteger('attempt')->default(0); 
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
        Schema::dropIfExists('user_test_result');
    }
}
