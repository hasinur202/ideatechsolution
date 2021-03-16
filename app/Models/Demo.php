<?php

namespace App\Models;

use App\Models\Demo_panel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function get_category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function get_panels()
    {
        return $this->hasMany(Demo_panel::class,'demo_id');
    }
}
