<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Houses extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'house';
    protected $primaryKey = 'id_house';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_house', 'img_house', 'title_house', 'description_house', 'short_description_house', 'price_house'
    ];

    public function check() {
        $reqs = HousesReq::where('id_house_request', $this->id_house)
            ->get();

        return count($reqs) > 0 ? true : false;
    }
}
