<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contoh extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'contoh';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'contoh1',
        'nomor',
        'nama',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
