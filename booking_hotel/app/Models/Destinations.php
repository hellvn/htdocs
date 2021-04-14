<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    use HasFactory;
    protected $table = 'destinations';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function hotels(){
        return $this->hasMany(Hotels::class,'destination_id','id');
    }
}
