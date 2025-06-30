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
        Schema::create('lich_trinhs', function (Blueprint $table) {
            $table->string('lich_ID', 5)->primary();
            $table->integer('ngayThu');
            $table->date('gioBatDau');
            $table->date('gioKetThuc');

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
        Schema::dropIfExists('lich_trinhs');
    }
};
