<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcast_faqs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();

            $table->bigInteger('podcast_id')->unsigned();
            $table->foreign('podcast_id')->references('id')->on('podcasts')->onDelete('cascade');
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
        Schema::dropIfExists('podcast_faqs');
    }
}
