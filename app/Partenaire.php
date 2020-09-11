<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partenaire extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partenaires';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'image','slug'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
