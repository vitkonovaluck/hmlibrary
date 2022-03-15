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
            $table->string('virt_name');
            $table->text('virt_text');
            $table->unsignedBigInteger('virt_type')->nullable();
            $table->string('virt_soft');
            $table->string('virt_soft_v');
            $table->timestamps();

            $table->index('virt_type','virtual_type_idx');
            $table->foreign('virt_type','virtual_type_fk')->on('virtual_types')->references('id');


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
