<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('parent_id')->default(0);
            $table->string('title',250);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->string('slug',100)->nullable();
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
        Schema::dropIfExists('menus');
    }
}
