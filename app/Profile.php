<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
   protected $table = 'profiles';
   public $timestamps = false;
    protected $fillable = ['created_by','first_name','last_name','gender','phone','address_line1','mobile','address_line2','ordering_count','company','updated_on'];
}
