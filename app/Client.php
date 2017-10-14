<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	  protected $fillable = ['name','redirect'];
       protected $table = 'oauth_clients';
   
}
