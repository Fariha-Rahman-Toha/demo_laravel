<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    protected $table='user';
    protected $fillable=['name','email','phone','country','date_of_birth','school','college','university','address','nationality','hobby','fathers_name','mothers_name','about_me'];
}
