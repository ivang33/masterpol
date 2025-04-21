<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Название партнера
            $table->string('type'); // Тип партнера (например, "Оптовик")
            $table->integer('rating')->unsigned(); // Рейтинг партнера
            $table->string('address'); // Адрес партнера
            $table->string('director_name'); // ФИО директора
            $table->string('phone'); // Телефон
            $table->string('email')->unique(); // Email
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
