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
        Schema::create('detail_reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('detail_id')->nullable()->constraint('detail_wisatas', 'id');
            $table->foreignId('review_id')->nullable()->constraint('review_wisatas', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_reviews');
    }
};
