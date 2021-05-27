<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    //relacion uno a muchos inverso
    public function course()
    {
        return $this->belongsTo(Course::class);
    }


}
