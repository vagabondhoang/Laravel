<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productdetail extends Model
{
    protected $table = 'productdetails';
    public $timestamps = false;
    protected $fillable = ['productsId','colour','initialPrice','discount','image_list','quantity'];
}
