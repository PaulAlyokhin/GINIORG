<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = 'countries';
    
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
        'code',
        'iso2',
        'iso_numeric',
        'fips',
        'name',
        'asciiname',
        'capital',
        'area',
        'population',
        'continent_code',
        'tid',
        'currency_code',
        'phone',
        'postal_code_format',
        'postal_code_regex',
        'languages',
        'neighbours',
        'equivalent_fips_code',
        'background_image',
        'admin_type',
        'admin_field_active',
        'active',
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];
}
