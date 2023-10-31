<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'meta_description', 'meta_keywords', 'logo', 'favicon', 'header_email', 'header_phone', 'facebook', 'twitter', 'instagram','linkend', 'companydesc', 'connectwithus', 'footer_logo'];
}
