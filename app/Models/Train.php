<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable=['train_name'];
    
    public function tripStops()
    {
        return $this->hasMany(TripStop::class);
    }
}
