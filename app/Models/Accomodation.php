<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
    use HasFactory;

    public function accdestination()
    {
        return $this->belongsTo(Destination::class, 'destination_id', 'id');
    }
}
