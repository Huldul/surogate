<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Requirement extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'title2','titl3', 'title4','compensacy', ];
}
