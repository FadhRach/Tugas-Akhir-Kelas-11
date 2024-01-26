<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pinjampl', function(Blueprint $table){
            $table->increments('id_pinjampl');
            $table->integer('id_place');
            $table->integer('id');
            $table->datetime('time_from');
            $table->datetime('time_to');
            $table->string('description')->nullable();
            $table->string('statadmin')->default('Dalam Pengajuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjampl');
    }
};
