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
        Schema::create('news_tags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('new_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('new_id','news_tag_news_idx');
            $table->index('tag_id','news_tag_tag_idx');

            $table->foreign('new_id','news_tag_news_fk')->on('newses')->references('id');
            $table->foreign('tag_id','news_tag_tag_fk')->on('tags')->references('id');

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
        Schema::dropIfExists('newse_tags');
    }
};
