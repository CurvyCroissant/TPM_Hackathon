<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group', function (Blueprint $table) {
            $table->id();
            $table->string("groupName");
            $table->string("password");
            $table->unsignedBigInteger('leader_id')->nullable();
            $table->unsignedBigInteger('members_id')->nullable();
            $table->timestamps();

            $table->foreign('leader_id')->references('id')->on('leader');
            $table->foreign('members_id')->references('id')->on('members');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group');
    }
};
