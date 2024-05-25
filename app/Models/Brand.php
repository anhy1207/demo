<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Brand extends Model
{
    use HasFactory;
    public $timestamps = false;

    //function để lấy dữ liệu từ bảng brand trên db
    public function index(){
        //query builder lấy dữ liệu từ bảng brands 
        $brands = DB::table('brands')
            ->get();
        //return về $brands
        return $brands;
    }
}
