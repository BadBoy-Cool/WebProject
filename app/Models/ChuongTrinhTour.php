<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChuongTrinhTour extends Model
{
    use HasFactory;

    protected $table = 'chuong_trinh_tours';

    protected $primaryKey = 'ct_ID'; 

    public $incrementing = false; 

    protected $keyType = 'string'; 

    protected $fillable = [
        'ct_ID',
        'tour_id',
        'ngay_thu',
        'mo_ta',
        'gia',
        'hinh_anh',
    ];

    public function tour()
    {
        return $this->belongsTo(\App\Models\Tour::class, 'tour_id');
    }
}
