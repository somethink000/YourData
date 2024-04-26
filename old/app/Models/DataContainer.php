<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataContainer extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'user_id',

    ];


    public function datas()
    {
        return $this->hasMany(Data::class, 'data_container_id');
    }
}
