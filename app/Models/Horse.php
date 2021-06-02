<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    use HasFactory;

protected $fillable = [
     'datum', 'name', 'name_owner', 'name_horse', 'phone_number', 'address', 'email',
     'name_horse', 'age', 'breed', 'gender', 'alternatief_adres', 'situatie', 'klacht',
     'algemeen', 'inspectie_stand', 'orienterende_palpatie', 'bewegingsonderzoek', 'behandeling',
     'verandering', 'featured',


];

public function getFeaturedAttribute($featured)
{
return asset($featured);
}
}
