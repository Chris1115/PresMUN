<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function add($image, $title, $headline, $description){
        Article::create([
            "image" => $image,
            "title" => $title,
            "headline" => $headline,
            "description" => $description
        ]);
    }
    public static function getAll(){
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public static function getById($id){
        $article = DB::table('articles')->where('id', $id)->first();
        return $article;
    }

    public static function updateData($id, $image, $title, $headline, $description){
        DB::table('articles')->where('id', $id)->update([
            'image' => $image, 
            'title' => $title, 
            'headline' => $headline, 
            'description' => $description
        ]);
    }

    public static function deleteById($id){
        DB::table('articles')->where('id', $id)->delete();
    }
}
