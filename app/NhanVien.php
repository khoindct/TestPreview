<?php

namespace App;

use Illuminate\Contracts\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Authenticatable
{
    protected $table = 'nhanvien';
    public $timestamps = false;

    public function PhongBan() {
        return $this->belongsTo('App\PhongBan', 'phongban_id', 'phongban_id');
    }

    public function To() {
        return $this->belongsTo('App\To', 'to', 'to');
    }

    public function PhanCap() {
        return $this->belongsTo('App\PhanCap', 'phancap_id', 'phancap_id');
    }

}
