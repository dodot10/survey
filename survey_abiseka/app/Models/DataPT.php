<?php

namespace App\Models;

use App\Models\Prodi;
use App\Models\Surveyer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPT extends Model
{
    use HasFactory;

    protected $table = 'data_pt';
    protected $primaryKey = 'id_pt';
    protected $fillable = [
        'nama_pt', 'tipe_pt', 'kode_pt', 'status_pt', 'alamat_pt', 'email_pt',
        'no_telepon_pt', 'website_pt', 'npwp_pt', 'tanggal_berdiri_pt',
        'no_sk_pendirian_pt', 'tanggal_pendirian_pt', 'fax_pt'
    ];

    public function surveyers()
    {
        return $this->hasMany(Surveyer::class, 'id_universitas');
    }

    public function prodis()
    {
        return $this->hasMany(Prodi::class, 'id_universitas');
    }
}
