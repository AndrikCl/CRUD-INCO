<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employeeposition
 *
 * @property $id
 * @property $employeePosition
 * @property $created_at
 * @property $updated_at
 *
 * @property Employee[] $employees
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employeeposition extends Model
{
    
    static $rules = [
		'employeePosition' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['employeePosition'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees()
    {
        return $this->hasMany('App\Models\Employee', 'id_employeeposition', 'id');
    }
    

}
