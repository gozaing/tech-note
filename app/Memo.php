<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $table = 'memo';
    protected $fillable = ['title, memo'];
}
