<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapels';
    protected $fillable = ['id_guru', 'nama_mapel'];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }
}
