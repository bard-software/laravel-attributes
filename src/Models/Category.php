<?php

namespace BardSoftware\LaravelAttributes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    public function attributes(){
        return $this->morphtoMany(Attribute::class,'slug');
    }
}

?>