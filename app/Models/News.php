<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Traits\Translatable;

class News extends Model
{
    use Translatable;
    protected $fillable = ['title', 'url', 'subtitle', 'main', 'image'];
    protected $translatable = ['title', 'subtitle', 'main', 'seo_title', 'meta_description', 'meta_keywords'];

    use HasFactory;
    public static function boot(){
        parent::boot();

        self::creating(function($model){
            $slug = Str::slug($model->title);
            $model->url = News::where('url', $slug)->exists() ? $slug.'-'.uniqid() : $slug;
        });

        self::updating(function($model){
            $slug = Str::slug($model->title);
            $model->url = News::where('url', '!=', $model->url)->where('url', $slug)->exists() ? $slug.'-'.uniqid() : $slug;
        });
    }
}
