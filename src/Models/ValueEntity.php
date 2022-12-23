<?php

namespace BardSoftware\LaravelAttributes\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueEntity extends Model
{
    use HasFactory;
    protected $table = 'laravel_attribute_values_table'; 
}

?>