<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'tour_id',
        'customer_name',
        'email',
        'phone',
        'soNguoiLon',
        'soEmBe',
        'note',
        'tongGia',
        'payment_method',
        'status',
        'thoiGianDat',
        'ngayLapPhieu'
    ];


    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
