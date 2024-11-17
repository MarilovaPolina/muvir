<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class WeddingsReq extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'wedding_request';
    protected $primaryKey = 'id_wedding_request';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_request', 'phone_wedding_request', 'name_wedding_request', 'date_wedding_request'
    ];
}
