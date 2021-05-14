<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    //relacion uno a uno inverso
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
