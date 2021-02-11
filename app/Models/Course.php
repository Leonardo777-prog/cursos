<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];


    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    // relacion de 1 a muchos

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // relacion muchos a muchos
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Course::class);
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

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }
    
    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function audience()
    {
        return $this->hasMany(Audience::class);
    }

    // relacion 1 a 1 polimorfica

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, Section::class);
    }
}
