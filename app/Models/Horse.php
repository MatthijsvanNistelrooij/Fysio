<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    use HasFactory;

protected $fillable = [
     'featured', 'datum', 'name', 'name_owner', 'name_horse', 'phone_number', 'address', 'email',
     'name_horse', 'age', 'breed', 'gender', 'alternatief_adres', 'bezit_eigenaar', 'huisvesting', 'voorgeschiedenis',
     'voeding', 'medicijnen', 'overig', 'aankoopkeuring', 'stoornissen', 'klacht', 'behandeling', 'veranderingen', 'mesten',
     'BAR', 'voedingstoestand', 'vacht', 'voeten', 'inspectie_stand', 'orienterende_palpatie',
     'bewegingsonderzoek',

];

public function getFeaturedAttribute($featured)
{
return asset($featured);
}
}
