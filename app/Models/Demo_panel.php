<?php

namespace App\Models;

use App\Models\Demo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demo_panel extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function get_demo()
    {
        return $this->belongsTo(Demo::class,'demo_id');
    }
}
