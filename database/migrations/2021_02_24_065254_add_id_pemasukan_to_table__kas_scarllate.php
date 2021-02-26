<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdPemasukanToTableKasScarllate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kasscarllate', function (Blueprint $table) {
            $table->integer('pemasukan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kasscarllate', function (Blueprint $table) {
            $table->dropColumn('pemasukan_id');
        });
    }
}
