<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Support\Facades\DB;

class Login extends Model
{
    use HasFactory;

    protected $table = 'KhachHang';

    // Kiểm tra người dùng tồn tại theo token
    public function getUsersByToken($token){
        return DB::table($this->table)-> where('activation_token', $token)->first();
    }

    // Cập nhật thông tin kích hoạt tài khoản
    public function activateUserAccount($token)
    {
        return DB::table($this->table)
            ->where('activation_token', $token)
            ->update(['activation_token'=>null, 'is_active'=>'y']);
    }

}
