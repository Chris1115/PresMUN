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

    public static function add($name, $image, $topic, $description){
        Chaco::create([
            "c_name" => $name,
            "c_image" => $image,
            "c_topic" => $topic,
            "c_description" => $description
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

    public static function updateData($id, $name, $image, $topic, $description){
        DB::table('chacos')->where('id', $id)->update([
            "c_name" => $name,
            "c_image" => $image,
            "c_topic" => $topic,
            "c_description" => $description
        ]);
    }

    public static function deleteById($id){
        DB::table('chacos')->where('id', $id)->delete();
    }

    public function chaco_pers(){
        return $this->hasMany(ChacoPers::class);
    }
}
