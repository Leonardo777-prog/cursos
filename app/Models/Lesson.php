<?php

namespace App\Models;

use DASPRiD\EnumTest\Planet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Descriptor\Descriptor;

class Lesson extends Model
{
    use HasFactory;

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
}