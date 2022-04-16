<?php

namespace App\Models;

use App\Models\subdivision;
use App\Models\secretariat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class division extends Model
{
    use HasFactory;

    public function subdivisions(){
        return $this->hasMany(subdivision::class);
    }

    public function secretariats(){
        return $this->hasMany(secretariat::class);
    }
}
