<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'Category',
        'directory_path'
    ];
    use HasFactory;
    public function products(){
        return $this->hasMany(Products::class,'category_id');
    }
}
