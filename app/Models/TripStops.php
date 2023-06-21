<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripStops extends Model
{
    protected $fillable=['train_id','trip_id','stop_id'];

    public function train()
    {
        return $this->belongsTo(Train::class);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function stop()
    {
        return $this->belongsTo(Stop::class);
    }
}
