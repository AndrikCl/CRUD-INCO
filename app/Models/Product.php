<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $supplier_id
 * @property $nameProduct
 * @property $quantityProduct
 * @property $priceProduct
 * @property $brandProduct
 * @property $ivaProduct
 * @property $descriptionProduct
 * @property $created_at
 * @property $updated_at
 *
 * @property Entry[] $entries
 * @property Invoice[] $invoices
 * @property Output[] $outputs
 * @property Supplier $supplier
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'supplier_id' => 'required',
		'nameProduct' => 'required',
		'quantityProduct' => 'required',
		'priceProduct' => 'required',
		'brandProduct' => 'required',
		'ivaProduct' => 'required',
		'descriptionProduct' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['supplier_id','nameProduct','quantityProduct','priceProduct','brandProduct','ivaProduct','descriptionProduct'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entries()
    {
        return $this->hasMany('App\Models\Entry', 'id_product', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice', 'id_product', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function outputs()
    {
        return $this->hasMany('App\Models\Output', 'id_product', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier', 'id', 'supplier_id');
    }
    

}
