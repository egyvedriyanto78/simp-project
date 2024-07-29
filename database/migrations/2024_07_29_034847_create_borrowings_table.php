<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowingsTable extends Migration
{
    public function up()
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id('borrowCode');
            $table->string('bookId');
            $table->integer('memberUid');
            $table->date('borrowDate');
            $table->date('returnDate')->nullable();
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('bookId')->references('id')->on('books')->onDelete('cascade');
            $table->foreign('memberUid')->references('uid')->on('members')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrowings');
    }
};

