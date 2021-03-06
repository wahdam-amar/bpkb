<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id')->nullable()->references('id')->on('person')->nullOnDelete();
            $table->string('name');
            $table->string('no');
            $table->string('brand');
            $table->string('type');
            $table->string('jenis');
            $table->date('made_date');
            $table->date('effective_date');
            $table->string('plate');
            $table->string('engine');
            $table->string('frame');
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
        Schema::dropIfExists('vehicle');
    }
}
