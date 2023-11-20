<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SSD2 extends Model
{
    use HasFactory;
    protected $table='s_s_d2_s'; 

    protected $fillable =['name','ssd_id','options','model','storage','details'];
}
