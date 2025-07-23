<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KGB extends Model
{

    use HasFactory;

    protected $fillable = [
        'user_id',
        'tgl_sk',
        'tgl_mulai_berlaku',
        'no_sk',
        'golongan',
        'gaji_lama',
        'gaji_baru',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
