<?php

namespace App\Models;

// use Spatie\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
// use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Casts\Attribute;

use TCG\Voyager\Traits\Translatable;

class Appeal extends Model
{
    // use HasTranslations;
    use Translatable;
    protected $fillable = ['title', 'head', 'main']; // Замените на ваши реальные поля

    protected $translatable = ['title', 'head', 'main']; // Укажите поля, которые хотите сделать мультиязычными
}
