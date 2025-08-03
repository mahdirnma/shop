<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'name',
        'description',
    ];
    public function category()
    {
        return $this->morphOne(Category::class,'categoryable');
    }
}
