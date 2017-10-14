<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Task extends Model
{
     protected $primaryKey = 'id';
     protected $fillable = [
     	'titleTask',
     	'descriptionTask',
     	'startTask',
     	'endTask',
     	'startTaskuser',
          'endTaskuser',
     	'startTasklatitude',
     	'startTasklongitude',
     	'endTasklatitude',
     	'endTasklongitude',
     	'statusTask',
     	'idUser'
     ];
     public function users(){
     return $this->hasOne('App\User','id');

     }
}

