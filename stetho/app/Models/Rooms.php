<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function hotels(){
        return $this->hasMany(Hotels::class,'hotel_id','id');
    }

    public function room_images(){
        return $this->hasMany(RoomImages::class,'room_id','id');
    }
}
