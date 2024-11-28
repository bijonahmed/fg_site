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
    'category_pages_description',
    'category_pages_keywords',
    'games_pages_description',
    'games_pages_keywords',
    'videos_pages_description',
    'videos_pages_keywords',
    'course_pages_description',
    'course_pages_keywords',

  ];
 
 

}
