<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GC2 extends Model
{
    use HasFactory;
    protected $table='g_c2_s'; 

    protected $fillable =['name','gc_id','options','model','details'];
}
