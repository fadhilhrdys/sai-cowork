<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    use HasFactory;

    protected $table = 'medias';

    protected $fillable = [
        'admin_id',
        'content_file',
        'category',
        'alt_image'
    ];

    // relation to admin table
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

}
