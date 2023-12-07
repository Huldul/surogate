<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class AppreciationLetter extends Model
{
    // protected $fillable = "AppreciationLetter";
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'company', ];
}
