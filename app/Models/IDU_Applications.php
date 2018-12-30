<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IDU_Applications extends Model
{
    //
    protected $table = 'idu_applications';
    
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
        'certificate_type',
        'activity_type',
        'title',
        'description',
        'start_date',
        'end_date',
        'audience',
        'document',
        'IDUs_claimed',
    ];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];
}
