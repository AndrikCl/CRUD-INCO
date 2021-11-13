<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $nameClient
 * @property $lastnameClient
 * @property $phoneNumberClient
 * @property $created_at
 * @property $updated_at
 *
 * @property Invoice[] $invoices
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    
    static $rules = [
		'nameClient' => 'required',
		'lastnameClient' => 'required',
		'phoneNumberClient' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nameClient','lastnameClient','phoneNumberClient'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice', 'id_client', 'id');
    }
    

}
