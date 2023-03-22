<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MainData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("main_data",function(Blueprint $table){
            $table->id();
            $table->timestamp("date_when_issued");
            $table->unsignedBigInteger("person_id");
            $table->foreign("person_id")->references("id")->on("person")->onDelete("cascade");
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
