<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_eskul',
        'namaeskul',
    ];
    protected $table = "eskul";
    protected $primaryKey = "id_eskul";

    public function user()
    {
        return $this->hasMany('App\Models\User', 'id');
    }
}
