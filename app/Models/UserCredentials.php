<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCredentials extends Model
{
    
    //
    protected $table = 'user_credential_app';
    
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
        'course_name',
        'course_date',
        'country_code',
        'trainer_name',
        'trainer_id',
        'AInP_name',
        'AInP_licence'

    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];
}