<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'ft_admin';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'id_admin';
}
