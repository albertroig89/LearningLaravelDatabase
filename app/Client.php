<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni', 'nom',
    ];
    /**
     * Els clients que te una empresa
     */
    public function empreses()
    {
        return $this->belongsToMany('App\Empresa');
    }

}
