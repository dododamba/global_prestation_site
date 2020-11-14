<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagebienvenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('message_bienvenus', function(Blueprint $table) {
                $table->increments('id');
                $table->text('message');
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
        Schema::drop('messagebienvenus');
    }

}
