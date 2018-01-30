<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * Fields that can not be mass assigned
     * 
     * @var array
     */
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';   
    }
}
