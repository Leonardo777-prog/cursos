<?php

namespace App\Models;

use DASPRiD\EnumTest\Planet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Descriptor\Descriptor;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    public function description()
    {
        return $this->hasOne(Description::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // relacion 1 a 1 polimorfica

    public function resource()
    {
        return $this->morphOne(Resource::class, 'resourceable');
    }

    // relacion 1 a muchos polimorfica

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'reactionable');
    }
}

