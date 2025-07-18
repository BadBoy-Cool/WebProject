<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Phải kế thừa cái này để login được
use Illuminate\Notifications\Notifiable;

class KhachHang extends Authenticatable
{
    use Notifiable;

    protected $table = 'KhachHang';

    protected $fillable = [
        'KH_name',
        'username',
        'password',
        'email',
        'sdt',
        'diachi',
        'KH_gioitinh',
        'activation_token',
        'is_active',
        'is_admin',
    ];

    // Laravel mặc định dùng 'password', override
    public function getAuthPassword()
    {
        return $this->password;
    }
}
