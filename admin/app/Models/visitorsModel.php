<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitorsModel extends Model
{
    use HasFactory;
    
    public $table= 'visitor';
    public $primaryKey= 'id';
    public $incrimenting=true;
    public $keyType= 'int';
    public $timestamps = false;
}
