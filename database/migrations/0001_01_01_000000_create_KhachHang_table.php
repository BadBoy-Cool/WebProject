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
        Schema::create('khachhang', function (Blueprint $table) {
            $table->id();
            $table->string('KH_name');
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('sdt') -> nullable();
            $table->string('diachi') -> nullable();
            $table->boolean('KH_gioitinh') -> nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('khachhang');
    }

};
