<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detail
 *
 * @property $id
 * @property $id_invoice
 * @property $quantityProductDetail
 * @property $priceProductDetail
 * @property $created_at
 * @property $updated_at
 *
 * @property Invoice $invoice
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detail extends Model
{
    
    static $rules = [
		'id_invoice' => 'required',
		'quantityProductDetail' => 'required',
		'priceProductDetail' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_invoice','quantityProductDetail','priceProductDetail'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function invoice()
    {
        return $this->hasOne('App\Models\Invoice', 'id', 'id_invoice');
    }
    

}
