<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelImages extends Model
{
    use HasFactory;
    protected $table = 'hotel_images';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function hotels(){
        return $this->belongsTo(Hotels::class,'hotel_id','id');
    }

}
