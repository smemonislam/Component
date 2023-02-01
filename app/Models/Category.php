<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public static function arrayForSelect() {
        $arr = [];
        $groups = Group::all();
        foreach ($groups as $group) {
            $arr[$group->id] = $group->title;
        } 

        return $arr;
    }
}
