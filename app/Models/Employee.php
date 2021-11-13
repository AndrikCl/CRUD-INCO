<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $userEmployee
 * @property $passwordEmployee
 * @property $nameEmployee
 * @property $lastnameEmployee
 * @property $phoneNumberEmployee
 * @property $emailEmployee
 * @property $id_employeeposition
 * @property $created_at
 * @property $updated_at
 *
 * @property Employeeposition $employeeposition
 * @property Output[] $outputs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'userEmployee' => 'required',
		'passwordEmployee' => 'required',
		'nameEmployee' => 'required',
		'lastnameEmployee' => 'required',
		'phoneNumberEmployee' => 'required',
		'emailEmployee' => 'required',
		'id_employeeposition' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['userEmployee','passwordEmployee','nameEmployee','lastnameEmployee','phoneNumberEmployee','emailEmployee','id_employeeposition'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employeeposition()
    {
        return $this->hasOne('App\Models\Employeeposition', 'id', 'id_employeeposition');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function outputs()
    {
        return $this->hasMany('App\Models\Output', 'id_employee', 'id');
    }
    

}
