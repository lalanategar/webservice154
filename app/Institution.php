<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['name', 'description'];
}
