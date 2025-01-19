<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlaceMedia extends Model
{
    use HasFactory;
    
    protected $table = 'place_medias';

    protected $fillable = [
        'admin_id',
        'place_id',
        'content_file',
        'category',
        'alt_image'
    ];

    // relation to admin table
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    // relation to admin table
    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }
}
