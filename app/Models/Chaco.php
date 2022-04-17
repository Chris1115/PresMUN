<?php

namespace App\Models;

use App\Models\ChacoPers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chaco extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function add($name, $slogan, $description){
        Chaco::create([
            "name" => $name,
            "slogan" => $slogan,
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

    public static function updateData($id, $name, $slogan, $description){
        DB::table('chacos')->where('id', $id)->update([
            "name" => $name,
            "slogan" => $slogan,
            "description" => $description
        ]);
    }

    public static function deleteById($id){
        DB::table('chacos')->where('id', $id)->delete();
    }

    public function chaco_pers(){
        return $this->hasMany(ChacoPers::class);
    }
}
