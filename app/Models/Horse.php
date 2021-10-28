<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    protected $fillable = [

        'content1',
        'content2',
        'content3',
        'content4',
        'content5',
        'content6',
        'content7',
        'content8',
        'content9',
        'content10',
        'content11',
        'content12',
        'content13',
        'content14',
        'content15',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function sessies()
    {
        return $this->hasMany(Sessie::class);
    }
}
