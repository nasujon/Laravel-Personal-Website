<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicesModel extends Model
{
    use HasFactory;

    public $table= 'services';
    public $primaryKey= 'id';
    public $incrimenting=true;
    public $keyType= 'int';
    public $timestamps = false;
}
