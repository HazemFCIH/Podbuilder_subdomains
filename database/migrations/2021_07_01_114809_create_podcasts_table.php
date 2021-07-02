<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->string('sub_domain');
            $table->string('rss_feed');
            $table->string('podcast_title');
            $table->text('podcast_description');
            $table->string('podcast_image');
            $table->string('podcast_language')->nullable();
            $table->string('podcast_author')->nullable();
            $table->string('podcast_premalink')->nullable();
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
        Schema::dropIfExists('podcasts');
    }
}
