<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingmenumstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainingmenumsts', function (Blueprint $table) {
            $table->id();
            $table->string("menuid");
            $table->string("exp");
            $table->string("target");
            $table->string("form");
            $table->string("point");
            $table->string("trainingname");
            $table->string("imgurl");
            $table->string("videourl");
            $table->timestamps();
        });
    }
  //  php artisan migrate:refresh  --step=1 --path=/database/migrations/
//Insert into trainingmenumsts(menuid,exp,target,form,point,trainingname,imgurl,videourl) values("プランク","ブランク","腹筋群","<h1>スタートポジション＜br＞仰向けで＜h２＞動作の手順＜br＞仰向けの姿勢","なし","プランク","","https://www.youtube.com/embed/v=pSHjTRCQxIw");
    public function down()
    {
        Schema::dropIfExists('trainingmenumsts');
    }
}
