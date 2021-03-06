<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('navs')) {
            Schema::create('navs', function (Blueprint $table) {
                $table->increments('id')->comment('前台菜单');
                $table->integer('pid')->default(0)->comment('菜单上级');
                $table->tinyInteger('sort')->default(1)->comment('排序');
                $table->string('name')->default('')->comment('菜单名');
                $table->string('url')->default('')->comment('链接');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navs');
    }
}
