<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToBorrowingsTable extends Migration
{
    public function up()
    {
        Schema::table('borrowings', function (Blueprint $table) {
            $table->string('status')->nullable()->after('fine');
        });
    }

    public function down()
    {
        Schema::table('borrowings', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
