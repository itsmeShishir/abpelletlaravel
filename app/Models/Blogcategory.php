<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogcategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'desc']; 

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'cat_id');
    }
}
