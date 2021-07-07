<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Horse;

class Sessie extends Model
{
    use HasFactory;
    protected $fillable = [
        'datum','name_horse', 'name_owner', 'horse_id', 'behandeling', 'inspectie_stand', 'orienterende_palpatie',

'bo1', 'bo2', 'bo3', 'bo4', 'bo5', 'bo6', 'bo7', 'bo8', 'bo9', 'bo10', 'bo11', 'bo12', 'bo13', 'bo14', 'bo15', 'bo16', 'bo17', 'bo18',
'bo19', 'bo20', 'bo21', 'bo22', 'bo23', 'bo24', 'bo25', 'bo26', 'bo27', 'bo28', 'bo29', 'bo30', 'bo31', 'bo32', 'bo33', 'bo34', 'bo35',
'bo36', 'bo37', 'bo38', 'bo39', 'bo40', 'bo41', 'bo42', 'bo43', 'bo44', 'bo45', 'bo46', 'bo47', 'bo48', 'bo49', 'bo50', 'bo51', 'bo52',
'bo53', 'bo54', 'bo55', 'bo56', 'bo57', 'bo58', 'bo59', 'bo60', 'bo61', 'bo62', 'bo63', 'bo64', 'bo65', 'bo66', 'bo67',

'bbr1', 'bbr2', 'bbr3', 'bbr4', 'bbr5', 'bbr6', 'bbr7', 'bbr8', 'bbr9', 'bbr10', 'bbr11', 'bbr12', 'bbr13', 'bbr14', 'bbr15', 'bbr16',
'bbr17', 'bbr18', 'bbr19', 'bbr20', 'bbr21', 'bbr22', 'bbr23', 'bbr24', 'bbr25', 'bbr26', 'bbr27', 'bbr28', 'bbr29', 'bbr30', 'bbr31',
'bbr32', 'bbr33', 'bbr34', 'bbr35', 'bbr36',

'bbl1', 'bbl2', 'bbl3', 'bbl4', 'bbl5', 'bbl6', 'bbl7', 'bbl8', 'bbl9', 'bbl10', 'bbl11', 'bbl12', 'bbl13', 'bbl14', 'bbl15', 'bbl16',
'bbl17', 'bbl18', 'bbl19', 'bbl20', 'bbl21', 'bbl22', 'bbl23', 'bbl24', 'bbl25', 'bbl26', 'bbl27', 'bbl28', 'bbl29', 'bbl30', 'bbl31',
'bbl32', 'bbl33', 'bbl34', 'bbl35', 'bbl36',

'ib1', 'ib2', 'ib3', 'ib4', 'ib5', 'ib6', 'ib7', 'ib8', 'ib9', 'ib10', 'ib11', 'ib12', 'ib13', 'ib14', 'ib15', 'ib16',
'ib17', 'ib18', 'ib19',

        'lp1', 'lp2', ];

    public function sessie()
    {
        return $this->belongsTo(Horse::class, 'horse_id');
    }
    public function horse()
    {
        return $this->hasMany(Sessie::class);
    }
}
