<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('KhachHang', function (Blueprint $table) {
            $table->id();
            $table->string('KH_name');
            $table->string('username');
            $table->string('userpassword');
            $table->string('email')->unique();
            $table->string('sdt');
            $table->string('diachi');
            $table->boolean('KH_gioitinh');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('KhachHang');
    }
};
