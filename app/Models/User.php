<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'u_username',
        'u_password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public static function add($username, $password){
        User::create([
            "u_username" => $username,
            "u_password" => $password
        ]);
    }
    public static function getAll(){
        $users = DB::table('users')->get();
        return $users;
    }

    public static function getFirst(){
        $users = DB::table('users')->first();
        return $users;
    }

    public static function getById($id){
        $user = DB::table('users')->where('id', $id)->first();
        return $user;
    }

    public static function updateData($id, $username, $password){
        DB::table('users')->where('id', $id)->update([
            "u_username" => $username,
            "u_password" => $password
        ]);
    }

    public static function deleteById($id){
        DB::table('users')->where('id', $id)->delete();
    }
}
