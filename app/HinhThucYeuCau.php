<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhThucYeuCau extends Model
{
    //
    protected $table = 'hinhthucyeucau';

    public function YeuCau() {
        return $this->belongsTo('App\YeuCau', 'hinhthuc_id', 'hinhthuc_id');
    }
}
