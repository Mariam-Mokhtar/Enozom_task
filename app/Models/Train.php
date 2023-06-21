<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable=['train_name'];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
