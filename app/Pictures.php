<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    protected  $fillable=[
      'url','admin_id','description',
    ];
}
