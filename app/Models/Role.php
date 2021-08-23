<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    /**
     * mass assignable data
     * @var array
     */

     protected $fillable=['role',];
     /**
      * @var string
      */
      protected $table='roles';

    /**
     * @var bool
     * 
     */
    public $timestamps=false;

    /**
     * The users that belong to the Role
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
