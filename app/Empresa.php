<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cif', 'nom',
    ];
    /**
     * Torna l'usuari al que pertany la empresa
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Les empreses que te un client
     */
    public function clients()
    {
        return $this->belongsToMany('App\Client');
    }

}
