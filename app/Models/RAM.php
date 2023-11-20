<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAM extends Model
{
    use HasFactory;
    protected $table='r_a_m_s'; 

    protected $fillable =['name','ram_id','options','model','ddr','rambus','details'];
}
