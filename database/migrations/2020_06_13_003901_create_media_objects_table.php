<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_objects', function (Blueprint $table) {
            $table->id();
            $table->string('gid')->nullable();
            $table->string('form')->nullable();
            $table->string('titl')->nullable();
            $table->string('blob')->nullable();
            $table->string('rin')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('media_objects');
    }
}
