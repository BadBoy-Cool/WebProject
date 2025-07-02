<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LichTrinhSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('lich_trinhs')->insert([
            [
                'lich_ID' => 'L001',
                'ngayThu' => 1,
                'gioBatDau' => '2025-07-01',
                'gioKetThuc' => '2025-07-03',
                'tour_ID' => 'T001',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'lich_ID' => 'L002',
                'ngayThu' => 1,
                'gioBatDau' => '2025-07-05',
                'gioKetThuc' => '2025-07-07',
                'tour_ID' => 'T002',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'lich_ID' => 'L003',
                'ngayThu' => 1,
                'gioBatDau' => '2025-07-10',
                'gioKetThuc' => '2025-07-11',
                'tour_ID' => 'T003',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}

