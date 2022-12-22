<?php

namespace BardSoftware\LaravelAttributes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeEntity extends Model
{
    use HasFactory;
    protected $table = 'laravel_attribute_entities_table'; 
}

?>