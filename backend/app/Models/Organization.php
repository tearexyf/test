<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'user_id', 'yandex_url', 'yandex_org_id', 'name',
        'rating_avg', 'ratings_count', 'reviews_count',
        'status', 'last_error', 'last_parsed_at',
    ];

    protected $casts = [
        'last_parsed_at' => 'datetime',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function parsingJobs()
    {
        return $this->hasMany(ParsingJob::class);
    }

    public function snapshots()
    {
        return $this->hasMany(ParsingSnapshot::class);
    }
}