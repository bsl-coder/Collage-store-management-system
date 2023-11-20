<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motherboard2 extends Model
{
    use HasFactory;
    protected $table='motherboard2s'; 

    protected $fillable =['name','motherboard_id','options','model','details'];
}
