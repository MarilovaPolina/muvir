<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class HousesReq extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'house_request';
    protected $primaryKey = 'id_request';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_request', 'id_house_request', 'name_house_request', 'phone_house_request', 'number_house_request', 'checkin_request', 'checkout_request'
    ];
}
