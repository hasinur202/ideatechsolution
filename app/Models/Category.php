<?php

namespace App\Models;

use App\Models\Demo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function get_demos()
    {
        return $this->hasMany(Demo::class,'category_id');
    }
}
