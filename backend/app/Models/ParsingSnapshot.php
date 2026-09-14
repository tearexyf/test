<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParsingSnapshot extends Model
{
    protected $fillable = [
        'organization_id', 'rating_avg', 'ratings_count',
        'reviews_count', 'new_reviews_count', 'parsed_at',
    ];

    protected $casts = [
        'parsed_at' => 'datetime',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}