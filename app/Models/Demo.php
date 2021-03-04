<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function get_category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
