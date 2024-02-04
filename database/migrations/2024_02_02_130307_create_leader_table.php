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
            $table->string("cv_image_path");
            $table->string("flazzCard_image_path");
            $table->string("idCard_image_path");
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
        Schema::dropIfExists('leader');
    }
};
