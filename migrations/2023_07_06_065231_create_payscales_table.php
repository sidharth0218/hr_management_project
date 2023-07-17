<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayscalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payscales', function (Blueprint $table) {
            $table->id();
            $table->string('salary');
            $table->integer('employee');
            $table->integer('department');
            $table->integer('designation');
            $table->date('joining');
            $table->date('leaving')->nullable();
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
        Schema::dropIfExists('payscales');
    }
}
