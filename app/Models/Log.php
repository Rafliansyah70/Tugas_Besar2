<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'machine_id',
        'user_id',
        'old_status',
        'new_status',
    ];

    // Relasi dengan Machine
    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
