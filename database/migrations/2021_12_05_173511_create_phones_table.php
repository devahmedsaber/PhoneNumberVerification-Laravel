<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('number')->nullable();
            $table->string('local_format')->nullable();
            $table->string('international_format')->nullable();
            $table->string('country_prefix')->nullable();
            $table->string('country_code')->nullable();
            $table->string('country_name')->nullable();
            $table->string('location')->nullable();
            $table->string('carrier')->nullable();
            $table->string('line_type')->nullable();
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('phones');
    }
}
