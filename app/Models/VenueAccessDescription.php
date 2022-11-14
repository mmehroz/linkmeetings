<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VenueAccessDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'venue_access_description';

    public function venueAccess()
    {
        return $this->hasOne('App\Models\VenueAccess','id','venue_access_id');
    }
}
