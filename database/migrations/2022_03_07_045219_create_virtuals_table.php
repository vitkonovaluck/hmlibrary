<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtuals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('text');
            $table->unsignedBigInteger('type')->nullable();
            $table->string('soft');
            $table->string('soft_v');
            $table->timestamps();

            $table->index('type','virtual_type_idx');
            $table->foreign('type','virtual_type_fk')->on('virtual_types')->references('id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virtuals');
    }
};
