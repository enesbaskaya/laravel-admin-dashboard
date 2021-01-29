<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('url')->nullable();
            $table->string('sector');
            $table->string('date')->nullable();
            $table->string('image')->nullable();
            $table->enum('isActive',[0,1])->default(1);
            $table->unsignedBigInteger('categoryId');
            $table->timestamps();
            $table->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
