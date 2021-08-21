<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    /**
     * 
     * mass assignable variables
     * @var array
     */

     protected $fillable=['slug','designation','address','locality_id','website','phone',];

     /**
      * @var string
      */
    protected $table='locations';

    /**
     * 
     * Indicates if the model is timestamped
     * @var bool
     */
    
    public $timestamps= false;

    public function locality(){
        /**
         * Get the locality that owns the Location
         *
         */
        return $this->belongsTo(locality::class);
        
    }
}
