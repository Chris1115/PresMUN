<?php

namespace App\Models;

use App\Models\division;
use App\Models\subdivision;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretariat extends Model
{
    use HasFactory;

    public function divisions(){
        return $this->belongsTo(division::class);
    }

    public function subdivisions(){
        return $this->belongsTo(subdivision::class);
    }
}
