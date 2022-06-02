<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetsModel extends Model
{
    use HasFactory;

    protected $table ="tbPets";

    public $timestamps=false;
    protected $fillable =['pets','sexo','Obs'];
    protected $primaryKey = 'idPets';
}
