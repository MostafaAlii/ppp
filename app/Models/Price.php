<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\HasImage;
class Price extends Model {
    use HasFactory, HasImage;
    protected $table = 'prices';
    protected $fillable = [
        'name',
        'status',
        'price'
    ];

    public function statusWithLabel() {
        switch ($this->status) {
            case 0: $result = '<label class="badge badge-warning">Not Active</label>'; break;
            case 1: $result = '<label class="badge badge-success">Active</label>'; break;
        }
        return $result;
    }

    public function scopeActive($query) {
        return $query->whereStatus(true);
    }

    public function advantages()
    {
        return $this->belongsToMany(Advantage::class, 'price_advantages');
    }
}