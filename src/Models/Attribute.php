<?php

namespace BardSoftware\LaravelAttributes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $table = 'laravel_attributes_table'; 

    public function entities(){
        return $this->morphtoMany(AttributeEntity::class,'entity_id');
    }
}

?>