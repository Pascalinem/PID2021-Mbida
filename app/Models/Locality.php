<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;
    /**
     * mass assignable variable
     * @var array
     */

     protected $fillable=['postal_code','locality'];

     /**
      * The table associated with the model
      *@var string
      */

    protected $table ='localities';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    //Get locations linked to a specific locality

    public function locations(){

      return $this->hasMany(Location::class);
    }



}
