<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LichTrinh extends Model
{
    protected $table = 'lich_trinhs';

    protected $primaryKey = 'lich_ID';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = true;

    protected $fillable = [
        'lich_ID',
        'ngayThu',
        'gioBatDau',
        'gioKetThuc',
        'tour_ID',
    ];

    protected $dates = [
        'gioBatDau',
        'gioKetThuc',
        'created_at',
        'updated_at',
    ];
}

