<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasImage;
class Offer extends Model {
    use HasFactory, HasImage;
    protected $table = 'offers';
    protected $fillable = [
        'name',
        'description',
        'note1',
        'note2',
        'note3',
        'note4',
        'note5',
        'note6',
        'note7',
        'note8',
    ];
}
