<?php

namespace App\Models;

use App\Models\Division;
use App\Models\Secretariat;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subdivision extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function add($divisions_id, $name, $slogan, $description){
        Subdivision::create([
            "divisions_id" => $divisions_id,
            "name" => $name,
            "slogan" => $slogan,
            "description" => $description
        ]);
    }
    public static function getAll(){
        $subdivisions = DB::table('subdivisions')->get();
        return $subdivisions;
    }

    public static function getById($id){
        $subdivision = DB::table('subdivisions')->where('id', $id)->first();
        return $subdivision;
    }

    public static function updateData($id, $divisions_id, $name, $slogan, $description){
        DB::table('subdivisions')->where('id', $id)->update([
            "divisions_id" => $divisions_id,
            "name" => $name,
            "slogan" => $slogan,
            "description" => $description
        ]);
    }

    public static function deleteById($id){
        DB::table('subdivisions')->where('id', $id)->delete();
    }

    public function divisions(){
        return $this->belongsTo(Division::class);
    }

    public function secretariats(){
        return $this->hasMany(Secretariat::class);
    }
}
