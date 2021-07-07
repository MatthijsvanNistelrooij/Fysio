<?php

namespace App\Models;
use App\Models\Sessie;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Horse extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getImageAttribute($image)
    {
        return asset($image);
    }

    public function sessies()
    {
        return $this->hasMany('App\Models\Sessie');
    }

}
