<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tour;
use Illuminate\Support\Str;

class TourSeeder extends Seeder
{
    public function run(): void
    {
        $tours = [
            [
                'tour_ID' => 'T001',
                'tour_name' => 'Đền Asakusa, Tokyo, Nhật Bản',
                'title' => 'Senso-ji là ngôi đền cổ nhất Tokyo, nổi tiếng với kiến trúc truyền thống.',
                'image' => 'backend/img/destinations/japan.png',
                'songay' => '3 ngày 2 đêm',
                'soluong' => '2-4 khách',
                'giaLon' => 5900,
                'giaEmBe' => 4900,
            ],
            [
                'tour_ID' => 'T002',
                'tour_name' => 'Tamnougalt, Morocco',
                'title' => 'Một ốc đảo cổ kính nằm bên dòng sông Draa, nổi bật với pháo đài cổ kasbah và nét văn hóa Berber.',
                'image' => 'backend/img/destinations/morocco.png',
                'songay' => '3 ngày 2 đêm',
                'soluong' => '5-8 khách',
                'giaLon' => 5800,
                'giaEmBe' => 4800,
            ],
            [
                'tour_ID' => 'T003',
                'tour_name' => 'Bangkok, Thái Lan',
                'title' => 'Thành phố sôi động kết hợp giữa truyền thống và hiện đại.',
                'image' => 'backend/img/destinations/bangkok.png',
                'songay' => '2 ngày 1 đêm',
                'soluong' => '4-6 khách',
                'giaLon' => 5000,
                'giaEmBe' => 4000,
            ],
            [
                'tour_ID' => 'T004',
                'tour_name' => 'Rome, Ý',
                'title' => 'Thủ đô lịch sử lừng danh với những công trình cổ đại như Đấu trường La Mã, Đền Pantheon...',
                'image' => 'backend/img/destinations/rome.png',
                'songay' => '4 ngày 3 đêm',
                'soluong' => '6-8 khách',
                'giaLon' => 8000,
                'giaEmBe' => 7000,
            ],
            [
                'tour_ID' => 'T005',
                'tour_name' => 'Bali, Indonesia',
                'title' => 'Thiên đường nhiệt đới nổi tiếng với những bãi biển tuyệt đẹp, thu hút du khách khắp thế giới.',
                'image' => 'backend/img/destinations/bali.png',
                'songay' => '2 ngày 1 đêm',
                'soluong' => '3-4 khách',
                'giaLon' => 4500,
                'giaEmBe' => 3500,
            ],
            [
                'tour_ID' => 'T006',
                'tour_name' => 'Barcelona, Tây Ban Nha',
                'title' => 'Thành phố nổi tiếng với kiến trúc độc đáo của Gaudí, bãi biển xinh đẹp và văn hóa sống động.',
                'image' => 'backend/img/destinations/barcelona.png',
                'songay' => '5 ngày 4 đêm',
                'soluong' => '8-10 khách',
                'giaLon' => 9000,
                'giaEmBe' => 8000,
            ],
            [
                'tour_ID' => 'T007',
                'tour_name' => 'New York, Mỹ',
                'title' => 'Thành phố sôi động với biểu tượng như tượng Nữ thần Tự do, Central Park và Times Square.',
                'image' => 'backend/img/destinations/newyork.png',
                'songay' => '3 ngày 2 đêm',
                'soluong' => '4-6 khách',
                'giaLon' => 6800,
                'giaEmBe' => 5800,
            ],
            [
                'tour_ID' => 'T008',
                'tour_name' => 'Cairo, Ai Cập',
                'title' => 'Thành phố lịch sử nổi tiếng với những kim tự tháp cổ đại và bảo tàng Ai Cập.',
                'image' => 'backend/img/destinations/cairo.png',
                'songay' => '7 ngày 6 đêm',
                'soluong' => '10-15 khách',
                'giaLon' => 10100,
                'giaEmBe' => 9000,
            ],
            [
                'tour_ID' => 'T009',
                'tour_name' => 'Vịnh Hạ Long, Vietnam',
                'title' => 'Vịnh Hạ Long là kỳ quan thiên nhiên nổi tiếng của Việt Nam, với hàng nghìn hòn đảo đá vôi kỳ vĩ giữa làn nước xanh ngọc bích.',
                'image' => 'backend/img/destinations/halong.png',
                'songay' => '4 ngày 6 đêm',
                'soluong' => '5-7 khách',
                'giaLon' => 1000,
                'giaEmBe' => 8000,
            ],
        ];

        foreach ($tours as $tour) {
            $tour['slug'] = Str::slug($tour['tour_name']); // tạo slug từ tên tour

            Tour::updateOrCreate(
                ['tour_ID' => $tour['tour_ID']], // tìm theo tour_ID
                array_merge($tour, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ])
            );
        }
    }
}
