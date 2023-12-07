<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Translatable;


class Partner extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title'];
}
