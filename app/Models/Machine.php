<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; // Tambahkan ini di bagian atas file


class Machine extends Model
{
    use HasFactory;

    protected $fillable = [
        'factory_id',
        'name',
        'status',
        'updated_at', // Pastikan kolom status_changed_at ada dalam fillable
    ];
    protected $casts = [
        'updated_at' => 'datetime', // Pastikan kolom updated_at di-cast menjadi Carbon
    ];

    // Relasi dengan Factory
    public function factory()
    {
        return $this->belongsTo(Factory::class);
    }

    // Event untuk mengupdate waktu perubahan status
    public static function boot()
    {
        parent::boot();

        static::updating(function ($machine) {
            if ($machine->isDirty('status')) {
                $machine->updated_at = Carbon::now(); // Update updated_at saat status berubah
            }
        });
    }
}
