<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'status'];
    protected $withCount = ['students', 'reviews'];

    public function getRatingAttribute()
    {
        if ($this->reviews_count) {
            # code...
            return round($this->reviews->avg('rating'), 1);
        } else {
            return 5;
        }
    }

    //Query scope
    public function scopeCategory($query, $category_id)
    {
        if ($category_id) {
            return $query->where('category_id', $category_id);
        }
    }
    public function scopeLevel($query, $level_id)
    {
        if ($level_id) {
            return $query->where('level_id', $level_id);
        }
    }

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    public function getRouteKeyName()
    {
        return "slug";
    }

//relacion uno a muchos
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

    public function aundiences()
    {
        return $this->hasMany(Audience::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    //ralacion uno a muchos inverso
    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    //relacion mmuchos a muchos
    public function students()
    {
        return $this->belongsToMany(User::class);
    }

    //relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //relacion atraves de
    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, Section::class);
    }
}
