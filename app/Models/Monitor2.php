<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor2 extends Model
{
    use HasFactory;
    protected $table='monitor2s'; 

    protected $fillable =['name','monitor_id','options','model','details'];
}
