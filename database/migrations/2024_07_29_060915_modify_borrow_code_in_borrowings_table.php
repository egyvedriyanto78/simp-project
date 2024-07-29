<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyBorrowCodeInBorrowingsTable extends Migration
{
    public function up()
    {
        Schema::table('borrowings', function (Blueprint $table) {
            $table->string('borrowCode', 50)->change();
        });
    }

    public function down()
    {
        Schema::table('borrowings', function (Blueprint $table) {
            $table->integer('borrowCode')->change();
        });
    }
}
