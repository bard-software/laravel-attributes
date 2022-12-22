<?php

namespace BardSoftware\LaravelAttributes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $table = 'laravel_attributes_table'; 

    public function setSlugAttribute($value): void{

    }

    public function getEntitiesAttribute(): array
    {
        return $this->entities()->pluck('entity_type');
    }

    public function entities(){
        return $this->morphtoMany(AttributeEntity::class,'entity_id');
    }

    public function values(){
        return $this->hasMany(AttributeValue::class,'slug')
    }
}

?>