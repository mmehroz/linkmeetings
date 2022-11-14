<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelDescription extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hotel_description';

    public function Hotel()
    {
        return $this->hasOne('App\Models\Hotel', 'id','hotel_id');
    }
}
