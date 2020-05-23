<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrderitems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderitems', function (Blueprint $table) {
            $table->integer('item_id');
            $table->integer('order_id'); //รหัสใบสั่งซื้อ
            $table->text('item_name'); //ชื่อสินค้าในใบสั่งซื้อ
            $table->decimal('item_price',10,2);
            $table->integer('item_amoun');
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
        Schema::dropIfExists('orderitems');
    }
}
