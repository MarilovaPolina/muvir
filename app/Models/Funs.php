<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Funs extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'fun';
    protected $primaryKey = 'id_fun';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_fun', 'img_fun', 'title_fun', 'description_fun', 'phone_fun', 'price_fun'
    ];
}
