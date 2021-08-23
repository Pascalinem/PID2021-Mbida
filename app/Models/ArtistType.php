<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistType extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable=['artist_id','type_id',];

    /**
     * @var string
     */
    protected $table='artist_type';

    public $timestamps=false;

    /**
     * The shows that belong to the ArtistType
     *
     *
     */
    public function shows()
    {
        return $this->belongsToMany(Show::class);
    }

    /**
     * Get the artist that owns the ArtistType
     *
     * 
     */
    public function artist()
    {
        return $this->belongsTo(artist::class);
    }

    /**
     * Get the type that owns the ArtistType
     *
     * 
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
