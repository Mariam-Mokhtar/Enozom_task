<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable=['source','destination'];

    public function train(){
        return $this->hasMany(Train::class);
    }
}

