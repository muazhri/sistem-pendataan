<?php

namespace App\Models;

use App\Models\Ranting;
use ReturnTypeWillChange;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggotas';

    /**
     * Get the ranting that owns the Anggota
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ranting()
    {
        return $this->belongsTo(Ranting::class);
    }
}
