<?php

namespace App\Models;

use App\Models\Ranting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'pengurus';

    protected $fillable = [
        'photo',
        'name',
        'gender',
        'address',
        'place_birth',
        'date_birth',
        'position',
    ];

    /**
     * Get the ranting that owns the Pengurus
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ranting()
    {
        return $this->belongsTo(Ranting::class);
    }
}
