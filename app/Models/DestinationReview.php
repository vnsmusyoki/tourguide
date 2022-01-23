<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationReview extends Model
{
    use HasFactory;

    public function destreview(){
        return $this->belongsTo(Destination::class, 'destination_id', 'id');
    }
}
