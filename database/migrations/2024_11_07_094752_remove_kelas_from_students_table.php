<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('students', function (Blueprint $table) {
        $table->dropColumn('kelas'); // Menghapus kolom kelas
    });
}

public function down()
{
    Schema::table('students', function (Blueprint $table) {
        $table->string('kelas'); // Menambahkan kolom kelas kembali jika migrasi dibatalkan
    });
}

};
