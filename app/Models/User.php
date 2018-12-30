<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';
    
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
        'username',
        'email',
        'full_name',
        'password',
        'remember_token',
        'title',
        'first_name',
        'facebook',
        'linkedin',
        'twitter',
        'google',
        'role',
        'status',
        'middle_name',
        'last_name',
        'birth_day',
        'birth_mon',
        'cert_name',
        'address_1',
        'address_2',
        'phone1',
        'country_code',
        'phone2',
        'mobile',
        'zipcode',
        'postalcode',
        'handbook_id',
        'provider',
        'provider_id',
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];
}
