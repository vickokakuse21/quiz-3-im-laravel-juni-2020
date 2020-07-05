<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{
    public static function get_all(){
        $artikel = DB::table('laravel')->get();
        return $artikel;
    }
}