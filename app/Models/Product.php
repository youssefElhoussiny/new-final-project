<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia 
{
    use HasFactory , InteractsWithMedia;
    protected $fillable = ['id' ,'name', 'category', 'price', 'bio'];
    protected $casts = [];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaCollection('product_images');
    }

}
