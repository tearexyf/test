<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParsingJob extends Model
{
    protected $fillable = [
        'organization_id', 'status', 'progress', 'total_expected',
        'attempts', 'error_message', 'started_at', 'finished_at',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}