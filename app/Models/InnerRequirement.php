<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class InnerRequirement extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['main'];
}
