<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Prix;

class Service extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'services';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'image', 'icon', 'texte','slug'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function prix()
    {
       return $this->hasOne(Prix::class,'service');
    }

}
