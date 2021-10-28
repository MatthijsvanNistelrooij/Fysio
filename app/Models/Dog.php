<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
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
        'image',
        'image2',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function consults()
    {
        return $this->hasMany(Consult::class);
    }
}
