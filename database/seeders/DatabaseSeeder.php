<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
=======
use Illuminate\Support\Facades\Hash;

>>>>>>> 25f4ead1c56db405dc36917c56a2d8b7aac0525b
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('KhachHang')->insert([
    'KH_name'      => 'Bảo Bảo',
    'username'     => 'giabao',
    'password'     => Hash::make('123456'),
    'email'        => 'toigiabao@gmail.com',
    'sdt'          => '0123456789',
    'diachi'       => 'Hà Nội',
    'KH_gioitinh'  => true,
    'created_at'   => now(),
    'updated_at'   => now(),
]);

<<<<<<< HEAD
=======
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'), // nhớ mã hóa mật khẩu
            ]
        );

        $this->call(TourSeeder::class);
        $this->call(ChuongTrinhTourSeeder::class);
        $this->call([
        LichTrinhSeeder::class,
        ]);

>>>>>>> 25f4ead1c56db405dc36917c56a2d8b7aac0525b
    }
}
