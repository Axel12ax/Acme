<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('updates',function(Blueprint $table){
            $table->increments('id');
            $table->string('file_name',100);
            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users');
            $table->integer('id_plans')->unsigned();
            $table->foreign('id_plans')->references('id')->on('plans');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
