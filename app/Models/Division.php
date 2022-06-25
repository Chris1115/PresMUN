<?php

namespace App\Models;

use App\Models\Subdivision;
use App\Models\Secretariat;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Division extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function add($name, $description){
        Division::create([
            "d_name" => $name,
            "d_description" => $description
        ]);
    }
    public static function getAll(){
        $divisions = DB::table('divisions')->get();
        return $divisions;
    }

    public static function getById($id){
        $chaco = DB::table('divisions')->where('id', $id)->first();
        return $chaco;
    }

    public static function updateData($id, $name, $description){
        DB::table('divisions')->where('id', $id)->update([
            "d_name" => $name,
            "d_description" => $description
        ]);
    }

    public static function deleteById($id){
        DB::table('divisions')->where('id', $id)->delete();
    }

    public function subdivisions(){
        return $this->hasMany(Subdivision::class);
    }

    public function secretariats(){
        return $this->hasMany(Secretariat::class);
    }
}
