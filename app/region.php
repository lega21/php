<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'region';
    protected $primaryKey = 'idregion';
    protected $fillable = ['region'];
    public $timestamps = false;
    
}

