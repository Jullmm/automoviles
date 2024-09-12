<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    use HasFactory; 

    protected $fillable = [
        'auto_name', 
        'auto_modelo', 
        'auto_marca', 
        'auto_pais',
    ]; 
    

    protected $table = 'automoviles';
    protected $primaryKey = 'auto_id';
}
