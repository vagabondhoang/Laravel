<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','image_link','description','categoriesId'];
    public $timestamps = false;
    
    public function category()
    {
        return $this->belongsTo('App\Category','categoriesId');
    }
}
