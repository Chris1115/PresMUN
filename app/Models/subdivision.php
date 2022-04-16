<?php

namespace App\Models;

use App\Models\division;
use App\Models\secretariat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subdivision extends Model
{
    use HasFactory;

    public function divisions(){
        return $this->belongsTo(division::class);
    }

    public function secretariats(){
        return $this->hasMany(secretariat::class);
    }
}
