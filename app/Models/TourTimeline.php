<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourTimeline extends Model
{
    protected $table = 'lich_trinhs';
    protected $primaryKey = ' lich_ID';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'lich_ID',
        'ngayThu',
        'gioBatDau',
        'gioKetThuc',
        'tour_ID',
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_ID', 'tour_ID');
    }
}
