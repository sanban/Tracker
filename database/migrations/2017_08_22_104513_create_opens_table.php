<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('token_id');
            $table->string('email')->default('z@z.com');
            $table->timestamp('opened_at');
            $table->string('IP');
            $table->string('Browser');
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
        Schema::dropIfExists('opens');
    }
}
