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

    public static function add($divisions_id, $name, $description){
        Subdivision::create([
            "divisions_id" => $divisions_id,
            "sd_name" => $name,
            "sd_description" => $description
        ]);
    }
    public static function getAll(){
        $subdiv = DB::table('subdivisions')
            ->join('divisions', 'subdivisions.divisions_id', '=', 'divisions.id')
            ->select('subdivisions.*', 'divisions.d_name')
            ->get();
    
        return $subdiv;
    }

    public static function getById($id){
        $subdivision = DB::table('subdivisions')->where('id', $id)->first();
        return $subdivision;
    }

    public static function updateData($id, $divisions_id, $name, $description){
        DB::table('subdivisions')->where('id', $id)->update([
            "divisions_id" => $divisions_id,
            "sd_name" => $name,
            "sd_description" => $description
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
