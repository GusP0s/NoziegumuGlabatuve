<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Confiscated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("confiscated",function(Blueprint $table){
            $table->id();
            $table->string("item");
            $table->INT("amount");
            $table->timestamps("date_when_confiscated");
            $table->string("justification_of_withdraw");
            $table->unsignedBigInteger("protocol_id");
            $table->unsignedBigInteger("storage_id");
            $table->foreign("protocol_id")->references("id")->on("main_data")->onDelete("cascade");
            $table->foreign("storage_id")->references("id")->on("storage")->onDelete("cascade");


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
