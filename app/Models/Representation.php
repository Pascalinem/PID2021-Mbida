<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representation extends Model
{
    use HasFactory;
    /**
     * 
     * mass assignable 
     * @var array
     */
    protected $fillable=['location_id','show_id', 'when',];

    /**
     * table name
     * @var string
     */
    protected $table='representations';

    /**
     * 
     * indicates if model timestamped
     * @var bool
     */
    public $timestamps= false;

    public function show(){
         /**
         * Get the show that owns the representation
         *
         */

        return $this->belongsTo(Show::class);
    }

    public function location(){
         /**
         * Get the location that owns the representation
         *
         */
        return $this->belongsTo(Location::class);
    }

    /**
     * The users that reserved for the current Representation
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
