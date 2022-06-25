<?php

namespace App\Models;

use App\Models\Division;
use App\Models\Subdivision;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Secretariat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function add($division_id, $subdivision_id, $image, $name, $achievements, $description){
        Secretariat::create([
            "divisions_id" => $division_id,
            "subdivisions_id" => $subdivision_id,
            "s_image" => $image,
            "s_name" => $name,
            "s_achievements" => $achievements,
            "s_description" => $description
        ]);
    }
    // public static function getAll(){
    //     $secretariats = DB::table('secretariats')->get();
    //     return $secretariats;
    // }

    public static function getAll(){
        $secre = DB::table('secretariats')
            ->join('divisions', 'secretariats.divisions_id', '=', 'divisions.id')
            ->join('subdivisions', 'secretariats.subdivisions_id', '=', 'subdivisions.id')
            ->select('secretariats.*', 'divisions.d_name', 'subdivisions.sd_name')
            ->orderBy('subdivisions_id', 'ASC')
            ->get();
    
        return $secre;
    }

    public static function getById($id){
        $secretariat = DB::table('secretariats')->where('id', $id)->first();
        return $secretariat;
    }

    public static function updateData($id, $division_id, $subdivision_id, $image, $name, $achievements, $description){
        DB::table('secretariats')->where('id', $id)->update([
            "divisions_id" => $division_id,
            "subdivisions_id" => $subdivision_id,
            "s_image" => $image,
            "s_name" => $name,
            "s_achievements" => $achievements,
            "s_description" => $description
        ]);
    }

    public static function deleteById($id){
        DB::table('secretariats')->where('id', $id)->delete();
    }

    public function divisions(){
        return $this->belongsTo(Division::class);
    }

    public function subdivisions(){
        return $this->belongsTo(Subdivision::class);
    }
}
