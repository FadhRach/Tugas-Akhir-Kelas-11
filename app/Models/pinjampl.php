<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjampl extends Model
{
    use HasFactory;
    protected $table = "pinjampl";
    protected $primaryKey = 'id_pinjampl';
    protected $fillable = ['id_pinjampl','id_place','id', 'description','time_from','time_to','statadmin'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }

    public function place()
    {
        return $this->belongsTo('App\Models\Place', 'id_place');
    }
}
