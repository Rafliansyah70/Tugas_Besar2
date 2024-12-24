<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    use HasFactory;

    protected $table = 'factories';

    protected $fillable = [
        'name',
        'location'
    ];

    // Relasi ke tabel users jika perlu
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
