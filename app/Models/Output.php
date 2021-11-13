<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Output
 *
 * @property $id
 * @property $id_product
 * @property $id_employee
 * @property $productOutput
 * @property $quantityOutput
 * @property $brandProductOutput
 * @property $dateOutput
 * @property $created_at
 * @property $updated_at
 *
 * @property Employee $employee
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Output extends Model
{
    
    static $rules = [
		'id_product' => 'required',
		'id_employee' => 'required',
		'productOutput' => 'required',
		'quantityOutput' => 'required',
		'brandProductOutput' => 'required',
		'dateOutput' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_product','id_employee','productOutput','quantityOutput','brandProductOutput','dateOutput'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne('App\Models\Employee', 'id', 'id_employee');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'id_product');
    }
    

}
