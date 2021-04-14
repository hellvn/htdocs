<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomImages extends Model
{
    use HasFactory;
    protected $table = 'room_images';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function rooms(){
        return $this->belongsTo(Rooms::class,'room_id','id');
    }
}
