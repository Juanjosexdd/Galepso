<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }
    //relacion uno a muchos polimorfica
    public function comments()
    {
        return $this->morphToMany(Comment::class, 'commentable');
    }
    public function reactions()
    {
        return $this->morphToMany(Reaction::class, 'reactionable');
    }
}
