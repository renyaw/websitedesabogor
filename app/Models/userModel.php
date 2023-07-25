<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory;

    protected $table = 'users';

    public function antrean_bbm()
    {
        return $this->hasMany(antreanBbmModel::class, 'fk_id_bbm', 'id_bbm');
    }


}
