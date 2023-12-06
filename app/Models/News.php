<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $fillable = ['title', 'url', 'subtitle', 'main', 'image'];

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
