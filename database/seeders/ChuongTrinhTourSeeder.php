<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ChuongTrinhTour;

class ChuongTrinhTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    $data = [
        [
            'ct_ID' => 'CT01',
            'ngayKhoiHanh' => '2025-07-01',
            'khachToiDa' => 8,
            'luuY' => 'Mang theo hộ chiếu, trang phục thoải mái.',
            'tour_ID' => 'T001',
        ],
        [
            'ct_ID' => 'CT02',
            'ngayKhoiHanh' => '2025-07-10',
            'khachToiDa' => 10,
            'luuY' => 'Thời tiết nóng, nên mang kem chống nắng.',
            'tour_ID' => 'T002',
        ],
        [
            'ct_ID' => 'CT03',
            'ngayKhoiHanh' => '2025-07-15',
            'khachToiDa' => 12,
            'luuY' => 'Mang theo dù vì có thể mưa nhẹ buổi chiều.',
            'tour_ID' => 'T003',
        ],
        [
            'ct_ID' => 'CT04',
            'ngayKhoiHanh' => '2025-07-20',
            'khachToiDa' => 6,
            'luuY' => 'Mang giày thể thao để dễ di chuyển.',
            'tour_ID' => 'T004',
        ],
        [
            'ct_ID' => 'CT05',
            'ngayKhoiHanh' => '2025-07-25',
            'khachToiDa' => 9,
            'luuY' => 'Chuẩn bị máy ảnh để chụp ảnh đẹp.',
            'tour_ID' => 'T005',
        ],
        [
            'ct_ID' => 'CT06',
            'ngayKhoiHanh' => '2025-08-01',
            'khachToiDa' => 7,
            'luuY' => 'Mang theo thuốc cá nhân nếu cần.',
            'tour_ID' => 'T006',
        ],
        [
            'ct_ID' => 'CT07',
            'ngayKhoiHanh' => '2025-08-05',
            'khachToiDa' => 5,
            'luuY' => 'Lưu ý giờ tập trung đúng giờ tại điểm đón.',
            'tour_ID' => 'T007',
        ],
        [
            'ct_ID' => 'CT08',
            'ngayKhoiHanh' => '2025-08-10',
            'khachToiDa' => 11,
            'luuY' => 'Không nên mang nhiều hành lý, tour di chuyển nhiều.',
            'tour_ID' => 'T008',
        ],
                [
            'ct_ID' => 'CT09',
            'ngayKhoiHanh' => '2025-08-15',
            'khachToiDa' => 11,
            'luuY' => 'Không nên mang nhiều hành lý, tour di chuyển nhiều.',
            'tour_ID' => 'T008',
        ],
    ];

        foreach ($data as $item) {
            ChuongTrinhTour::updateOrCreate(
                ['ct_ID' => $item['ct_ID']],
                array_merge($item, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ])
            );
        }
    }
}
