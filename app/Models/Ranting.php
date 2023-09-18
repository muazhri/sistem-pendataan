<?php

namespace App\Models;

use App\Models\Alumni;
use App\Models\Anggota;
use App\Models\Pengurus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ranting extends Model
{
    use HasFactory;

    protected $table = 'rantings';

    protected $fillable = [
        'name',
    ];

    /**
     * Get all of the comments for the Ranting
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function alumni()
    {
        return $this->hasMany(Alumni::class);
    }

    public function anggota()
    {
        return $this->hasMany(Anggota::class);    
    }

}
