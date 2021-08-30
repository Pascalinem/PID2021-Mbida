<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    /**
     * @var array
     */
    protected $fillable=['representation_id','user_id',];

    /**
     * @var string
     */
    protected $table='reservations';

    public $timestamps=false;

    /**
     * Get the user that owns the reservation
     *
     * 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the representation that owns the reservation
     */
    public function representation()
    {
        return $this->belongsTo(Representation::class);
    }
}
