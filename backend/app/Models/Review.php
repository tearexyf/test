<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'organization_id', 'external_id', 'content_hash',
        'author_name', 'review_date', 'text', 'rating',
    ];

    protected $casts = [
        'review_date' => 'datetime',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}