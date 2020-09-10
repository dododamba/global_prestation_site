<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAproposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('apropos', function(Blueprint $table) {
                $table->increments('id');
                $table->string('titre');
                $table->string('text');
                $table->string('image');
                $table->text('texte');
                $table->string('slug')->nullable();

                $table->timestamps();
                $table->softDeletes();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apropos');
    }

}
