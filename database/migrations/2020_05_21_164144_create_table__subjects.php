<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Subjects', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('nameTH');
            $table->string('nameEN');
            $table->decimal('price',6,2); //สูงสุด 6 หลัก ทศนิยม 2 ตำแหน่ง
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
        Schema::dropIfExists('Subjects');
    }
}
