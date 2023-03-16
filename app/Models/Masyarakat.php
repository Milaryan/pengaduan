<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Masyarakat as Authenticatable;

class Masyarakat extends Model
{
    use HasFactory;
    protected $table = 'masyarakat';
    protected $primaryKey = 'nik';

    protected $fillable =[
        'nama',
        'nik',
        'username',
        'telp',
        'alamat',
        'password'
    ];
}
