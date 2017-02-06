<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $table = 'blog';
	public $timestamps = false;
	protected $fillable = ['created','updated','created_by','intro','title','slug','category_id','body','parsed','thumbnail','keywords','comments_enabled','status'];

	public function blog_category()
    {
        return $this->belongsTo('App\BlogCategory','category_id');
    }
	
}
