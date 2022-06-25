<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChacoPersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chaco_pers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chacos_id');
            $table->string('cp_image')->nullable();
            $table->string('cp_name');
            $table->string('cp_institution');
            $table->string('cp_role');
            $table->string('cp_achievements', 15000);
            $table->longText('cp_description', 20000);
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
        Schema::dropIfExists('chaco_pers');
    }
}
