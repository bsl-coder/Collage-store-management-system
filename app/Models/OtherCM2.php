<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherCM2 extends Model
{
    use HasFactory;
    protected $table='other_c_m2_s'; 

    protected $fillable =['name','product_id','options','model','details'];
}
