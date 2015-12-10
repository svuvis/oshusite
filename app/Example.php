<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $table = 'examples';

    protected $fillable = ['title', 'body'];
}
