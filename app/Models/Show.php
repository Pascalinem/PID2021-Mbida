<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable=['slug','title','description','poster_url','location_id','bookable','price',];

    /**
     * @var string
     */
   protected $table='shows';

   /**
    * 
    * Indicates if the model is timestamped
    * @var bool
    */
    public $timestamps= true;

    /**
         * Get all of the representations for the Show
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function representations()
        {
            return $this->hasMany(Representation::class);
        }

    /**
     * Get the Location that owns the Show
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    
}
