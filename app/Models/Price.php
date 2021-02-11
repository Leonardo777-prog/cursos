<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // relacion de uno a muchos
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
