<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemainMu extends Model
{
    use HasFactory;
    protected $table = 'pemain_mus';
    protected $fillable = ['nama_pemain', 'no_punggung', 'posisi'];
}
