<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prix extends Model
{


	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'prixes';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prix', 'promotionel', 'exipired_at', 'service', 'slug','nombre'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
