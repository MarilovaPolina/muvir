<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Posts extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'post';
    protected $primaryKey = 'id_post';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_post', 'img_post', 'title_post', 'description_post', 'date_post',
    ];
}
