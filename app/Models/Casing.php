<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casing extends Model
{
    use HasFactory;
    protected $table='casings'; 

    protected $fillable =['name','casing_id','options','model','details'];
}
