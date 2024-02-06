<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('images')->nullable();
            $table->string('tags');
            $table->text('meta_keywords');
            $table->text('meta_description');
            $table->longText('contents');
            $table->tinyInteger('status')->default(0)->comment('0=pending,1=active,2=publish');
            $table->tinyInteger('see_first')->default(0)->comment('0=normal,1=see_first');
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
        Schema::dropIfExists('blogs');
    }
}
