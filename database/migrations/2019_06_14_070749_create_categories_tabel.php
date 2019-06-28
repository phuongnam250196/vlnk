<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblCategories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cate_name', 255)->nullable();
            $table->string('cate_slug', 255)->nullable();
            $table->string('cate_content', 255)->nullable();
            $table->integer('cate_parent')->unsigned()->nullable();
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
        Schema::dropIfExists('tblCategories');
    }
}
