<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function blog_comments(){
        return $this->hasMany(BlogComments::class,'blog_id','id');
    }

    public function blog_tags(){
        return $this->hasMany(BlogTags::class,'blog_id','id');
    }
}
