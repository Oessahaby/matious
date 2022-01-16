<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('Invoice_ID');
            $table->string('Branch');
            $table->string('City');
            $table->string('Customer');
            $table->string('Product_line');
            $table->double('Unit_price',8, 2);
            $table->integer('Gender');
            $table->double('Tax_5%',8,4);
            $table->double('Total',8,4);
            $table->date('Date');
            $table->time('Time');
            $table->string('Payment');
            $table->string('cogs');
            $table->double('gross_margin_percentage',8,8);
            $table->double('gross_income',8,8);
            $table->double('Rating',8,4);
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
        Schema::dropIfExists('posts');
    }
}
