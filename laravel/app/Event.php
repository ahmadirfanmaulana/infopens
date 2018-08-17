<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table = 'ft_events';
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'id_event';
}
