<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class About extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'index_title', 'index_subtitle', 'main', 'statistic1', 'statistic2', 'statistic3', 'statistic1_about', 'statistic2_about', 'statistic3_about'];
}
