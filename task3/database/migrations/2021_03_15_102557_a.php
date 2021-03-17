<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class A extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('A', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('awb')->index();
            $table->float('cod');
            $table->float('fees');
            $table->timestamp('paid_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('A');
    }
}
