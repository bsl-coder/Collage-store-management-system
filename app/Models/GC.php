<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GC extends Model
{
    use HasFactory;
    protected $table='g_c_s'; 

    protected $fillable =['name','gc_id','options','model','details'];
}
