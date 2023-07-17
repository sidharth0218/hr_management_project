<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('asset_id');
            $table->bigInteger('employee_id');
            $table->dateTime('start_date_time')->nullable();
            $table->dateTime('return_date_time')->nullable();
            $table->enum('status', ['assigned','free'])->nullable();
//            $table->foreign('asset_id')->references('id')->on('assets')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('asset_employees');
    }
}
