<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antreanBbmModel extends Model
{
    use HasFactory;
    protected $table = 'antrean_bbm';

    public function permohonan_bbm()
    {
        return $this->belongsTo(userModel::class, 'fk_id_user', 'id');
    }

    public function antre_stat_dom()
    {
        return $this->belongsTo(statusModel::class, 'fk_status', 'id_status');
    }
}
