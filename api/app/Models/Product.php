<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use AuthorizesRequests;
use DB;

class Product extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = "product";
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'entry_by',
        'thumbnail',
        'mobile_image',
        'meta_description',
        'meta_keywords',
    ];

 
}
