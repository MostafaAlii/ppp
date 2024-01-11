<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExampleImage extends Model
{
    use HasFactory;
    protected $table = 'example_images';
    protected $fillable = ['example_id','photo'];
    public function gallery() {
        return $this->belongsTo(Example::class, 'example_id', 'id');
    }
}
