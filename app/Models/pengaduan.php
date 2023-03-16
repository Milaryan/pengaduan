<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';
    protected $primaryKey = 'id_pengaduan';

    protected $guarded = ['id_pengaduan'];

    public function nik()
    {
        return $this->belongsTo(Masyarakat::class, 'nik');
    }
}
