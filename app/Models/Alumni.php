<?php

namespace App\Models;

use App\Models\Ranting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumnis';

    /**
     * Get the ranting that owns the Alumni
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ranting()
    {
        return $this->belongsTo(Ranting::class);
    }
}
