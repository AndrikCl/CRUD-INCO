<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoice
 *
 * @property $id
 * @property $id_client
 * @property $id_product
 * @property $paymentPointInvoice
 * @property $dateInvoice
 * @property $ivaInvoice
 * @property $totalProductsInvoice
 * @property $totalPriceInvoice
 * @property $cashReceivedInvoice
 * @property $cashBackInvoice
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Detail[] $details
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Invoice extends Model
{
    
    static $rules = [
		'id_client' => 'required',
		'id_product' => 'required',
		'paymentPointInvoice' => 'required',
		'dateInvoice' => 'required',
		'ivaInvoice' => 'required',
		'totalProductsInvoice' => 'required',
		'totalPriceInvoice' => 'required',
		'cashReceivedInvoice' => 'required',
		'cashBackInvoice' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_client','id_product','paymentPointInvoice','dateInvoice','ivaInvoice','totalProductsInvoice','totalPriceInvoice','cashReceivedInvoice','cashBackInvoice'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'id_client');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function details()
    {
        return $this->hasMany('App\Models\Detail', 'id_invoice', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'id_product');
    }
    

}
