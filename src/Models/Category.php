<?php

namespace BardSoftware\LaravelAttributes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use BardSoftware\LaravelAttributes\Traits\Attributable;

class Attribute extends Model
{
    use HasFactory;
    use Attributable;

    public function attributes(){
        return $this->morphtoMany(AttributeEntity::class,'attribute_id');
    }
}

?>