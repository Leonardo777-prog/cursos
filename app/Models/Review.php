<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // relacion 1 a muchos inversa con User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

        // relacion 1 a muchos inversa con course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
