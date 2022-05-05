<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('title');
            $table->string('name');
            $table->foreignIdgti ('category_id')->constrained();
            $table->foreignId('trainer_id')->constrained('trainers', 'id');
            $table->integer('nrMax');
            $table->foreignId('status_id')->constrained('statuses', 'id');
            $table->string('time');
            $table->date('date');
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
        Schema::dropIfExists('classes');
    }
}
