<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prixes', function (Blueprint $table) {
            $table->id();
            $table->double('prix')->nullable();
            $table->double('promotionel')->nullable();
            $table->date('exipired_at')->nullable();
            $table->integer('service')->nullable();
            $table->integer('nombre')->nullable();
            $table->string('slug')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('prixes');
    }
}
