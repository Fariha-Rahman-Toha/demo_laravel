<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $table='personal_infos';
    protected $fillable=['name','email','image','designation','birthdate','address','about_me','fb_link','insta_link','linkedin_link'];

}
