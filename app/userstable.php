<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userstable extends Model
{
    protected $table = 'userstable';
    public $timestamps = false;
    protected $fillable = ['email','password','groupsId','created_on','last_login','username','active','forgotten_password_code','remember_code'];

    public function group()
    {
        return $this->belongsTo('App\Group', 'groupsId');
    }
    public function orders() {
    	return $this->hasMany('App\Order');
    }
}
