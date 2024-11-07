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
        $table->string('tempatlahir')->nullable(); // Menambahkan kolom tempatlahir
        $table->date('tanggallahir')->nullable();   // Menambahkan kolom tanggallahir
    });
}

public function down()
{
    Schema::table('students', function (Blueprint $table) {
        $table->dropColumn(['tempatlahir', 'tanggallahir']); // Menghapus kolom tempatlahir dan tanggallahir
    });
}
};
