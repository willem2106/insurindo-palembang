<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Layanan_Detail extends Model
{
    use SoftDeletes;
    protected $table = 'layanan_detail';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id_main',
        'judul',
        'konten',
        'gambar_path',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y H:i:s');
    }

    public function main()
    {
        return $this->belongsTo(layanan_main::class);
    }
}
