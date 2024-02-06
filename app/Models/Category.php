<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','parentId',
        'name',
    ];
    // public function getChild()
    // {
    //     return $this->hasMany(self::class, 'parentId');
    // }
    public function getChild ()
    {
        return $this->hasMany(Category::class, 'parentId', 'id')->with('getChild');
    }
}
