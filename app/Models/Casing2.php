<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casing2 extends Model
{
    use HasFactory;
    protected $table='casing2s'; 

    protected $fillable =['name','casing_id','options','model','details'];
}
