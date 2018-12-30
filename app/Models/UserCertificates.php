<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCertificates extends Model
{
    //
    protected $table = 'user_certificates';
    
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
        'user_type',
        'name',
        'membership_id',
        'certificate_type',
        'issue_date',
        'expiry_date',
        'status',
        'certificate_number',
        'page',
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];
}
