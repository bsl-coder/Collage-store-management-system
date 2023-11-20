<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor2 extends Model
{
    use HasFactory;
    protected $table='processor2s'; 

    protected $fillable =['name','processor_id','options','model','generation','details'];
}
