<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExp extends Model
{
    //
    protected $table = 'working_exp';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'position',
        'start_date',
        'end_date',
        'industry_type',
        'responsibilities',
        'organization_name',
        'organization_website',
        'address_1',
        'address_2',
        'country_code',
        'city_id',
        'zipcode',
        'manager_name',
        'manager_email',
        'manager_phone',
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];
}
