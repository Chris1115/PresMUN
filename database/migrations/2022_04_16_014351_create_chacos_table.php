<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChacosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chacos', function (Blueprint $table) {
            $table->id();
            $table->string('c_name');
            $table->string('c_image')->nullable();
            $table->string('c_topic', 10000);
            $table->longText('c_description', 20000);
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
        Schema::dropIfExists('chacos');
    }
}
