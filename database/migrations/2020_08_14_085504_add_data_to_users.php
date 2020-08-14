<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('jenis_kelamin');
            $table->string('nomor_telepon', 15);
            $table->string('nomor_whatsapp', 15);
            $table->string('alamat_lengkap', 600);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('nomor_telepon');
            $table->dropColumn('nomor_whatsapp');
            $table->dropColumn('alamat_lengkap');
        });
    }
}
