<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function galleryItems()
    {
        return $this->hasMany(GalleryItem::class);
    }
}
