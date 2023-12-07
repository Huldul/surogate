<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class DonorRequirement extends Model
{
    use HasFactory;
    protected $translatable = ['main', ];
}
