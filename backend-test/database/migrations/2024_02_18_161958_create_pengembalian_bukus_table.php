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
        Schema::create('pengembalian_bukus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_return_id');
            $table->foreign('book_return_id')->references('id')->on('peminjaman_bukus')->onDelete('cascade');
            $table->dateTime('returned_at');
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
        Schema::dropIfExists('pengembalian_bukus');
    }
};
