<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripStops extends Model
{
    protected $fillable=['train_id','stop_id','stop_time'];

}
