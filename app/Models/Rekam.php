<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekam extends Model
{
    use HasFactory;
    protected $fillable = [
        'antrian_id', 'obat'
    ];

    public function antrian()
    {
        return $this->belongsTo(Antrian::class);
    }
}
