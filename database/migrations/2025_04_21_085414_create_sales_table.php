<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_id')->constrained('partners')->onDelete('cascade'); // Связь с партнером
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Связь с продукцией
            $table->integer('quantity')->unsigned(); // Количество проданной продукции
            $table->date('sale_date'); // Дата продажи
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
