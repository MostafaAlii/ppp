<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasImage;
class Contact extends Model {
    use HasFactory ,HasImage;
    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}
