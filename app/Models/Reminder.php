<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'time',
    ];

    protected $casts = [
        'date' => 'datetime', // Pastikan kolom 'date' dikonversi ke Carbon
        'time' => 'datetime', // Jika kolom 'time' juga string waktu
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
