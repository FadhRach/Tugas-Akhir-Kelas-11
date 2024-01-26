<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = "item";
    protected $primaryKey = 'id_item';
    protected $fillable = ['id_item','nameitem','photoitem','description','status'];

    public function pinjamitem()
    {
        return $this->hasMany('App\Models\pinjamitem', 'id_pinjamitem');
    }
}

