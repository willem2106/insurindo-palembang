<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Karir_Main extends Model
{
    use SoftDeletes;
    protected $table = 'karir_main';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'karir',
        'kategori',
        'tipe',
        'lokasi',
        'keterangan',
        'gaji',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y H:i:s');
    }

    public function detail()
    {
        return $this->hasMany(karir_detail::class);
    }
}
