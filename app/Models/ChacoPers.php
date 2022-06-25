<?php

namespace App\Models;

use App\Models\Chaco;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChacoPers extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function add($name, $image, $role, $institution, $chacos_id, $achievements, $description){
        ChacoPers::create([
            "cp_name" => $name,
            "cp_image" => $image,
            "cp_role" => $role,
            "cp_institution" => $institution,
            "chacos_id" => $chacos_id,
            "cp_achievements" => $achievements,
            "cp_description" => $description
        ]);
    }
    public static function getAll(){
        $secre = DB::table('chaco_pers')
            ->join('chacos', 'chaco_pers.chacos_id', '=', 'chacos.id')
            ->select('chaco_pers.*', 'chacos.c_name', 'chacos.c_name')
            ->get();
    
        return $secre;
    }

    public static function getById($id){
        $chaco = DB::table('chaco_pers')->where('id', $id)->first();
        return $chaco;
    }

    public static function getByChacoId($id){
        $chaco = DB::table('chaco_pers')->where('chacos_id', $id)->get();
        return $chaco;
    }

    public static function updateData($id, $name, $image, $role, $institution, $chacos_id, $achievements, $description){
        DB::table('chaco_pers')->where('id', $id)->update([
            "cp_name" => $name,
            "cp_image" => $image,
            "cp_role" => $role,
            "cp_institution" => $institution,
            "chacos_id" => $chacos_id,
            "cp_achievements" => $achievements,
            "cp_description" => $description
        ]);
    }

    public static function deleteById($id){
        DB::table('chaco_pers')->where('id', $id)->delete();
    }

    public function chachos(){
        return $this->belongsTo(Chaco::class);
    }
}
