<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entry
 *
 * @property $id
 * @property $productEntry
 * @property $quantityEntry
 * @property $priceProductEntry
 * @property $brandEntry
 * @property $dateEntry
 * @property $id_product
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entry extends Model
{
    
    static $rules = [
		'productEntry' => 'required',
		'quantityEntry' => 'required',
		'priceProductEntry' => 'required',
		'brandEntry' => 'required',
		'dateEntry' => 'required',
		'id_product' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['productEntry','quantityEntry','priceProductEntry','brandEntry','dateEntry','id_product'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'id_product');
    }
    

}
