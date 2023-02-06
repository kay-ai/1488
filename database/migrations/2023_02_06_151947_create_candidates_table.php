<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('state')->nullable();
            $table->string('constituency')->nullable();
            $table->string('party')->nullable();
            $table->string('age')->nullable();
            $table->string('educational_check')->nullable();
            $table->string('health_check')->nullable();
            $table->string('credibility_check')->nullable();
            $table->string('age_check')->nullable();
            $table->string('office')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
