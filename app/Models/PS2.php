<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PS2 extends Model
{
    use HasFactory;
    protected $table='p_s2_s'; 

    protected $fillable =['name','ps_id','options','model','details'];
}
