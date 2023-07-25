<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusModel extends Model
{
    use HasFactory;
    protected $table = 'status';

    public function antre_bbm()
    {
        return $this->hasMany(antreBbmModel::class, 'fk_status', 'id_status');
    }
}
