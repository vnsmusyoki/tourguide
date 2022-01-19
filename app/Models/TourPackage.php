<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
{
    use HasFactory;
    public function tourpackagedest()
    {
        return $this->belongsTo(Destination::class, 'destination_id', 'id');
    }
    public function tourpackageacc()
    {
        return $this->belongsTo(Accomodation::class, 'accomodation_id', 'id');
    }
}
