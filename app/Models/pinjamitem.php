<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjamitem extends Model
{
    use HasFactory;
    protected $table = "pinjamitem";
    protected $primaryKey = 'id_pinjamitem';
    protected $fillable = ['id_pinjamitem','id_item','id','description','time_from','time_to','statadmin'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id');
    }

    public function item()
    {
        return $this->belongsTo('App\Models\Item', 'id_item');
    }
}
