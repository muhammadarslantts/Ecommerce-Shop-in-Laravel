<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'type'];


    // now we use accesser for image path
    public $uploadDir = '/assets/site/img/';
    public function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->uploadDir . $value
        );
    }
}
