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
        Schema::create('chuong_trinh_tours', function (Blueprint $table) {
            $table->string('ct_ID', 5)->primary();
            $table->date('ngayKhoiHanh');
            $table->integer('khachToiDa');
            $table->string('luuY')->nullable();

            $table->string('tour_ID', 5);
            $table->foreign('tour_ID')->references('tour_ID')->on('tours')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chuong_trinh_tours');
    }
};
