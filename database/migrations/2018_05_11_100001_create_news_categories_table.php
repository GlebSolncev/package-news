<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsCategoriesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: categories
         */
        Schema::create(config('gscms.news.category.model.table'), function ($table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['show','hide'])->nullable();
            $table->string('user_type', 255)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('upload_folder', 255)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop(config('gscms.news.category.model.table'));
    }
}
