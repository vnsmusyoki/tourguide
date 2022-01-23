<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public function reviewacc(){
        return $this->belongsTo(Accomodation::class, 'accomodation_id', 'id');
    }
    public function reviewuser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
