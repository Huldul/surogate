<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class SeoToPage extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['meta_title', 'meta_description','meta_keywords', ];
}
