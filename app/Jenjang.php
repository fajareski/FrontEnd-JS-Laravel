<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    protected $guarded = [];
    public function kelas(){
        return $this->hasMany('App\Jenjang', 'parent_id');
    }
}
