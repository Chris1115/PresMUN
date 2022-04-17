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

    public static function add($division_id, $subdivision_id, $image, $name, $role, $achievements, $description){
        Secretariat::create([
            "division_id" => $division_id,
            "subdivision_id" => $subdivision_id,
            "image" => $image,
            "name" => $name,
            "role" => $role,
            "achievements" => $achievements,
            "description" => $description
        ]);
    }
    public static function getAll(){
        $secretariats = DB::table('secretariats')->get();
        return $secretariats;
    }

    public static function getById($id){
        $secretariat = DB::table('secretariats')->where('id', $id)->first();
        return $secretariat;
    }

    public static function updateData($id, $division_id, $subdivision_id, $image, $name, $role, $achievements, $description){
        DB::table('secretariats')->where('id', $id)->update([
            "division_id" => $division_id,
            "subdivision_id" => $subdivision_id,
            "image" => $image,
            "name" => $name,
            "role" => $role,
            "achievements" => $achievements,
            "description" => $description
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
