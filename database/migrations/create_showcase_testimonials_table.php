<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowcaseTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('role')->nullable();
            $table->text('content');
            $table->string('logo', 500)->nullable(); // Make it 500 in case it will be stored a SVG
            $table->string('profile_picture')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('testimonials');
    }
}
