<?php

namespace App\Models;

use App\Models\chacos_pers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chaco extends Model
{
    use HasFactory;

    public function chaco_pers(){
        return $this->hasMany(chacos_pers::class);
    }
}
