<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function add($image, $title){
        Gallery::create([
            "ga_title" => $title,
            "ga_image" => $image,
        ]);
    }
    public static function getAll(){
        $galleries = DB::table('galleries')->get();
        return $galleries;
    }

    public static function getById($id){
        $gallery = DB::table('galleries')->where('id', $id)->first();
        return $gallery;
    }

    public static function updateData($id, $image, $title){
        DB::table('galleries')->where('id', $id)->update([
            'ga_image' => $image, 
            'ga_title' => $title
        ]);
    }

    public static function deleteById($id){
        DB::table('galleries')->where('id', $id)->delete();
    }
}
