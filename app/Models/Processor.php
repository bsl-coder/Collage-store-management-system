<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    use HasFactory;
    protected $table='processors'; 

    protected $fillable =['name','processor_id','options','model','generation','details'];
}
