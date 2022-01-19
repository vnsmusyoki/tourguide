<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBooking extends Model
{
    use HasFactory;
    public function bookinguser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function bookingacc()
    {
        return $this->belongsTo(Accomodation::class, 'accomodation_id', 'id');
    }
    public function bookingdest()
    {
        return $this->belongsTo(Destination::class, 'destination_id', 'id');
    }
    public function bookingpackage()
    {
        return $this->belongsTo(TourPackage::class, 'package_id', 'id');
    }
}
