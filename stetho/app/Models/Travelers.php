<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;;

class Travelers extends Model
{
    use HasFactory;
    protected $table = 'traverlers';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function bookings(){
        return $this->hasMany(Bookings::class,'traveler_id','id');
    }

    public function User(){
        return $this->hasOne(User::class,'user_id','id');
    }
}
