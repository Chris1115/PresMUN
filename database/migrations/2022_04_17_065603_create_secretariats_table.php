<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretariatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretariats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('divisions_id');
            $table->foreignId('subdivisions_id');
            $table->string('s_image')->nullable();
            $table->string('s_name');
            $table->string('s_achievements');
            $table->longText('s_description', 20000);
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
        Schema::dropIfExists('secretariats');
    }
}
