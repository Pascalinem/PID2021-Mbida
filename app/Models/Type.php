<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    /**
     * The attribute that are mass assignable
     * @var array
     */

    protected $fillable=['type',];

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'types';

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The artists that belong to the Type
     *
     */
    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

}
