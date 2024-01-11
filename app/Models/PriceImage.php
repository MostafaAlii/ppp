<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceImage extends Model
{
    use HasFactory;
    protected $table = 'price_images';
    protected $fillable = ['price_id','photo'];
    public function gallery() {
        return $this->belongsTo(Price::class, 'price_id', 'id');
    }
}
