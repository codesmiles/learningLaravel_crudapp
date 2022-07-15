<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists //extends Model
{
    // use HasFactory;

    public static function all()
    {
        return [
            [
                "id" => 1,
                "title" => "listing 1",
                "description" => "lorem ipsum dolor sit amet",
            ],
            [
                "id" => 2,
                "title" => "listing 2",
                "description" => "lorem ipsum dolor sit amet 2",
            ]
            ];
    }
    public static function find($id){
        $lists = self::all();

        foreach($lists as $list){
            if($list["id"]==$id){
                return $list;
            }
        }

    }
};
