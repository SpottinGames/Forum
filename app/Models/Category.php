<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The database table used by the model.
     *
     * @var array
     */
    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
