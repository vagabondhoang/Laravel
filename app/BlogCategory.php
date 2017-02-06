<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    public $timestamps = false;
    protected $fillable = ['slug','title'];

    public function blogs()
    {
        return $this->hasMany('App\Blog','id');
    }
}
