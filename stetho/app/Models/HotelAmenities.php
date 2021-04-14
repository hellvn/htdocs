<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelAmenities extends Model
{
    use HasFactory;
    protected $table = 'hotel_amenities';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function hotels(){
        return $this->belongsTo(Hotels::class,'hotel_id','id');
    }
}
