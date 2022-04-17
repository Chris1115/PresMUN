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

    public static function add($name, $image, $role, $chacos_id, $achievements, $description){
        ChacoPers::create([
            "name" => $name,
            "image" => $image,
            "role" => $role,
            "chacos_id" => $chacos_id,
            "achievements" => $achievements,
            "description" => $description
        ]);
    }
    public static function getAll(){
        $chacos = DB::table('chacos')->get();
        return $chacos;
    }

    public static function getById($id){
        $chaco = DB::table('chacos')->where('id', $id)->first();
        return $chaco;
    }

    public static function updateData($id, $name, $image, $role, $chacos_id, $achievements, $description){
        DB::table('chacos')->where('id', $id)->update([
            "name" => $name,
            "image" => $image,
            "role" => $role,
            "chacos_id" => $chacos_id,
            "achievements" => $achievements,
            "description" => $description
        ]);
    }

    public static function deleteById($id){
        DB::table('chacos')->where('id', $id)->delete();
    }

    public function chachos(){
        return $this->belongsTo(Chaco::class);
    }
}
