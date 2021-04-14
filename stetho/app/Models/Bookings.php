<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function traverlers(){
        return $this->belongsTo(Travelers::class,'travaler_id','id');
    }

    public function rooms(){
        return $this->hasOne(Rooms::class,'room_id','id');
    }

}
