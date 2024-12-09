<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\AttributeValues;
use AuthorizesRequests;
use DB;

class SeoSetting extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;
  public $table = "setting";
  
  protected $fillable = [
    'index_pages_description',
    'index_pages_keywords',
    'services_pages_description',
    'services_pages_keywords',
  ];
 
 

}
