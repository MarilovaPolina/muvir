<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ExcursionsReq extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'exc_request';
    protected $primaryKey = 'id_request';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_request', 'id_exc_request', 'phone_exc_request', 'name_exc_request', 'date_exc_request'
    ];
}
