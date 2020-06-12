<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiYeuCau extends Model
{
    //
    protected $table = 'loaiyeucau';

    public function YeuCau() {
        return $this->belongsTo('App\YeuCau', 'loaiyeucau_id', 'loaiyeucau_id');
    }
}
