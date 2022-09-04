<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('about')->nullable();
            $table->text('client')->nullable();
            $table->text('websiteUrl')->nullable();
            $table->text('mission')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('coverImg')->nullable();
            $table->string('projectImg')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
