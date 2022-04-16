<?php

namespace App\Models;

use App\Models\Chaco;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chacos_pers extends Model
{
    use HasFactory;

    public function chachos(){
        return $this->belongsTo(Chaco::class);
    }
}
