<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKeluarga extends Model
{
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'jumlah',
        'id_user',
    ];
}
