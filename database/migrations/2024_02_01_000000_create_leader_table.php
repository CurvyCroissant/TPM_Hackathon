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
        Schema::create('leader', function (Blueprint $table) {
            $table->id();
            $table->string("fullName");
            $table->string("email");
            $table->string("waNumber");
            $table->string("lineId");
            $table->string("gitId");
            $table->string("birthPlace");
            $table->string("birthDate");
            $table->string("cv_file_path")->nullable();
            $table->string("flazzCard_file_path")->nullable();
            $table->string("idCard_file_path")->nullable();
            // $table->unsignedBigInteger('group_id');
            $table->timestamps();

            // $table->foreign('group_id')->references('id')->on('group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leader');
    }
};
