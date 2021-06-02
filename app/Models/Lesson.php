<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function getCompletedAttribute()
    {
        return $this->users->contains(auth()->user()->id);
    }

    //relacion uno a uno
    public function description()
    {
        return $this->hasOne(Description::class);
    }

    //relacion uno a muchos inverso
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    //relacion uno a muchos 
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    //relacion uno a uno polimorfica
    public function resource()
    {
        return $this->morphTo(Resource::class, 'resourceable');
    }

    //relacion uno a muchos polimorfica
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function reaction()
    {
        return $this->morphMany(Reaction::class, 'reactionable');
    }
}
