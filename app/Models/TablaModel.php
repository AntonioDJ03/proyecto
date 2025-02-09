<?php

namespace App\Models;

use CodeIgniter\Model;

class TablaModel extends Model
{
    protected $table = 'tabla'; 
    protected $primaryKey = 'id';  
    protected $allowedFields = ['nombre', 'apellido', 'telefono'];
}
