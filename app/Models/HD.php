<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HD extends Model
{
    use HasFactory;
    protected $table='h_d_s'; 

    protected $fillable =['name','hd_id','options','model','storage','details'];
}
