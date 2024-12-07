<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'admin_id',
        'media_id',
        'is_active'
    ];

    // relation to admin table
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    // relation to media table
    public function media(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }
}
