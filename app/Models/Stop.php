<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    protected $fillable=['stop-name','stop_time'];
    public function tripStops()
    {
        return $this->hasMany(TripStop::class);
    }
}
