<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{   
    use HasFactory;
    protected $table = "place";
    protected $primaryKey = 'id_place';
    protected $fillable = ['id_place','nameplace','description','photoplace','status'];

    public function pinjampl()
    {
        return $this->hasMany('App\Models\pinjampl', 'id_pinjampl');
    }
}
