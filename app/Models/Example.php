<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasImage;
class Example extends Model {
    use HasFactory,HasImage;
    protected $table = 'examples';
    protected $guarded = [];

    public function images() {
        return $this->hasMany(ExampleImage::class, 'example_id', 'id');
    }
}
