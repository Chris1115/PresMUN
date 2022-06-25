<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gossip extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function add($message, $title, $sender, $receiver){
        Gossip::create([
            "g_title" => $title,
            "g_message" => $message,
            "g_sender" => $sender,
            "g_receiver" => $receiver
        ]);
    }
    public static function getAll(){
        $gossips = DB::table('gossips')->get();
        return $gossips;
    }

    public static function getById($id){
        $article = DB::table('gossips')->where('id', $id)->first();
        return $article;
    }

    public static function updateData($id, $message, $title, $sender, $receiver){
        DB::table('gossips')->where('id', $id)->update([
            "g_title" => $title,
            "g_message" => $message,
            "g_sender" => $sender,
            "g_receiver" => $receiver
        ]);
    }

    public static function deleteById($id){
        DB::table('gossips')->where('id', $id)->delete();
    }
}
