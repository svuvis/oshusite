<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{
    protected $table = 'board_members';

    protected $fillable = ['name', 'function', 'picture', 'description'];
}
