<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $primaryKey ='id';
    protected $fillable =['id','nombre','apellido','cedula','email','celular','sexo','edad','salario'];
}
