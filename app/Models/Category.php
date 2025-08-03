<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'name',
        'description',
        'categoryable_id',
        'categoryable_type',
    ];
    public function categoryable(){
        return $this->morphTo();
    }
}
