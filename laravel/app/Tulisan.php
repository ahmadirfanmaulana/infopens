<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tulisan extends Model
{
    //
    protected $table = 'ft_tulisan';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'id_tulisan';
}
