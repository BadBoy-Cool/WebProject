<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\TourTimeline;

    class Tour extends Model
    {
        protected $fillable = [
            'tour_ID',
            'tour_name',
            'title',
            'songay',
            'soluong',
            'giaLon',
            'giaEmBe',
            'slug',
            'image',
        ];
        protected $table = 'tours';

        protected $primaryKey = 'tour_ID';
        public $incrementing = false;
        protected $keyType = 'string';

        public function chuongTrinh()
        {
            return $this->hasMany(ChuongTrinhTour::class, 'tour_ID', 'tour_ID');
        }
    }
