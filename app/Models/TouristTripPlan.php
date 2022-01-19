<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristTripPlan extends Model
{
    use HasFactory;

    public function planaccomodation()
    {
        return $this->belongsTo(Accomodation::class, 'accomodation_id', 'id');
    }
    public function planuser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function plandestination()
    {
        return $this->belongsTo(Destination::class, 'destination_id', 'id');
    }
}
