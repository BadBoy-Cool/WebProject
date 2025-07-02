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
                'songay' => '3 ngày 2 đêm',
                'soluong' => '2-4 khách',
                'giaLon' => 59000,
                'giaEmBe' => 49000,
            ],
            [
                'tour_ID' => 'T002',
                'tour_name' => 'Tamnougalt, Morocco',
                'title' => 'Một ốc đảo cổ kính nằm bên dòng sông Draa, nổi bật với pháo đài cổ kasbah và nét văn
                 hóa Berber.',
                'songay' => '3 ngày 2 đêm',
                'soluong' => '5-8 khách',
                'giaLon' => 58000,
                'giaEmBe' => 48000,
            ],
            [
                'tour_ID' => 'T003',
                'tour_name' => 'Bangkok, Thái Lan',
                'title' => ' Thành phố sôi động kết hợp giữa truyền thống và hiện đại.',
                'songay' => '2 ngày 1 đêm',
                'soluong' => '4-6 khách',
                'giaLon' => 50000,
                'giaEmBe' => 40000,
            ],
            [
                'tour_ID' => 'T004',
                'tour_name' => 'Rome, Ý',
                'title' => 'Thủ đô lịch sử lừng danh với những công trình cổ đại như Đấu trường La Mã, Đền
                 Pantheon...',
                'songay' => '4 ngày 3 đêm',
                'soluong' => '6-8 khách',
                'giaLon' => 80000,
                'giaEmBe' => 70000,
            ],
            [
                'tour_ID' => 'T005',
                'tour_name' => 'Bali, Indonesia',
                'title' => 'Thiên đường nhiệt đới nổi tiếng với những bãi biển tuyệt đẹp, thu hút du khách khắp
                 thế giới.',
                'songay' => '2 ngày 1 đêm',
                'soluong' => '3-4 khách',
                'giaLon' => 45000,
                'giaEmBe' => 35000,
            ],
            [
                'tour_ID' => 'T006',
                'tour_name' => 'Barcelona, Tây Ban Nha',
                'title' => 'Thành phố nổi tiếng với kiến trúc độc đáo của Gaudí, bãi biển xinh đẹp và văn hóa   sống động.',
                'songay' => '5 ngày 4 đêm',
                'soluong' => '8-10 khách',
                'giaLon' => 90000,
                'giaEmBe' => 80000,
            ],
            [
                'tour_ID' => 'T007',
                'tour_name' => 'New York, Mỹ',
                'title' => 'Thành phố sôi động với biểu tượng như tượng Nữ thần Tự do, Central Park và Times
                 Square.',
                'songay' => '3 ngày 2 đêm',
                'soluong' => '4-6 khách',
                'giaLon' => 68000,
                'giaEmBe' => 58000,
            ],
            [
                'tour_ID' => 'T008',
                'tour_name' => 'Cairo, Ai Cập',
                'title' => ' Thành phố lịch sử nổi tiếng với những kim tự tháp cổ đại và bảo tàng Ai Cập.',
                'songay' => '7 ngày 6 đêm',
                'soluong' => '10-15 khách',
                'giaLon' => 101000,
                'giaEmBe' => 90000,
            ],
                        [
                'tour_ID' => 'T009',
                'tour_name' => 'Vịnh Hạ Long, Vietnam',
                'title' => 'Vịnh Hạ Long là kỳ quan thiên nhiên nổi tiếng của Việt Nam, với hàng nghìn hòn đảo đá vôi kỳ vĩ giữa làn nước xanh ngọc bích.',
                'songay' => '4 ngày 6 đêm',
                'soluong' => '5-7 khách',
                'giaLon' => 10000,
                'giaEmBe' => 80000,
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
