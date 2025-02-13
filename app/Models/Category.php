<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class,'user_categories');
    }

    protected $fillable = ['title','color'];
}
