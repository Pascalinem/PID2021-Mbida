<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * The attribute that are mass assignable
     * @var array
     */
    use HasFactory;
    protected $fillable=['firstname','lastname'];
    /**
     * the table associated with the model
     * @var string
     */
    protected $table='artists';
    /**
     * indicates if the model should be timestamped
     * @var bool
     */
    public $timestamps=false;

    /**
     * The types that belong to the aRTIST
     *
     */
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }
}
