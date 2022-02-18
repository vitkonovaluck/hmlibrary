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
        Schema::create('statics', function (Blueprint $table) {
            $table->id();
            $table->string('page_name');
            $table->text('page_title');
            $table->string('page_slug');
            $table->text('page_text');
            $table->string('page_frame');
            $table->string('page_frame1');
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
        Schema::drop('staticses');
    }
};
