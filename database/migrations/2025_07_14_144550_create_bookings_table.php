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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            // Thông tin người đặt
            $table->string('customer_name');
            $table->string('email');
            $table->string('phone');

            // Thông tin tour (dùng mã T001 thay vì id số)
            $table->string('tour_id', 5); 
            $table->foreign('tour_id')
                ->references('tour_ID')   
                ->on('tours')
                ->onDelete('cascade');

            // Chi tiết đặt tour
            $table->integer('soNguoiLon')->default(1);
            $table->integer('soEmBe')->default(0);
            $table->text('note')->nullable();
            $table->bigInteger('tongGia')->default(0);
            $table->enum('status', ['pending', 'paid', 'cancelled'])->default('pending');

            // Thời gian
            $table->dateTime('thoiGianDat')->nullable();
            $table->dateTime('ngayLapPhieu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
