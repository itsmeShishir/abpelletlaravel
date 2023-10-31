<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['name','user', 'photo', 'slug', 'status', 'description', 'cat_id'];

    public function blogcategory()
    {
        return $this->belongsTo(Blogcategory::class,'cat_id');
    }
}
