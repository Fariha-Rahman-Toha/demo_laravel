<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientTable extends Model
{
    protected $table='client_tables';
    protected $fillable=['name','email','subject','message'];
 
}
