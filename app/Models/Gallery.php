<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';

    protected $fillable = [
    	'name',
    	'image',
    	'description',
    	'slug',
    	'status',
    ];

    public function getGalleryImageUrl($type = null){


          $imagePath = GELLARY_IMAGE_UPLOAD_PATH().$this->image;
          $imageUrl = GELLARY_IMAGE_UPLOAD_URL().$this->image;

        if (isset($this->image) && !empty($this->image) && file_exists($imagePath) ) {

          return $imageUrl;

        }
        return $imageUrl;
    }
}
