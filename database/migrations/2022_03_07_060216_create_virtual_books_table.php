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
        Schema::create('virtual_books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vb_virt')->nullable();
            $table->string('vb_avtor');
            $table->string('vb_avtor_i');
            $table->string('vb_avtor1');
            $table->string('vb_avtor_i1');
            $table->string('vb_avtor2');
            $table->string('vb_avtor_i2');
            $table->string('vb_avtor3');
            $table->string('vb_avtor_i3');
            $table->string('vb_avtor4');
            $table->string('vb_avtor_i4');
            $table->string('vb_name');
            $table->string('vb_print');
            $table->integer('vb_year');
            $table->integer('vb_pages');
            $table->text('vb_text');
            $table->string('vb_images');
            $table->string('vb_upor');
            $table->integer('vb_sub');
            $table->integer('vb_type');
            $table->timestamps();

            $table->index('vb_virt','virtual_book_vitrual_idx');
            $table->foreign('vb_virt','virtaul_book_virtual_fk')->on('virtual_types')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virtual_books');
    }
};
