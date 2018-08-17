<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    //
    protected $table = 'ft_partner';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'id_partner';
}
