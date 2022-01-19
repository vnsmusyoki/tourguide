<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    use HasFactory;
    public function touristuser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
