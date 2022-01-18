<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAccomodation extends Model
{
    use HasFactory;

    public function bookacc()
    {
        return $this->belongsTo(Accomodation::class, 'accomodation_id', 'id');
    }
}
