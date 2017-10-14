<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localizations extends Model
{
  protected $fillable = ['latitude','longitude','idUser'];
}
