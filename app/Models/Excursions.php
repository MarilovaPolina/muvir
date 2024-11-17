<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Excursions extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'excursion';
    protected $primaryKey = 'id_exc';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_exc', 'img_exc', 'title_exc', 'description_exc', 'phone_exc', 'price_exc'
    ];

    public function check() {
        $reqs = ExcursionsReq::where('id_exc_request', $this->id_exc)
            ->get();

        return count($reqs) > 0 ? true : false;
    }
}
