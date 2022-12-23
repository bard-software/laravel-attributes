<?php

namespace BardSoftware\LaravelAttributes\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeEntity extends Model
{
    use HasFactory;
    
    protected $table = 'laravel_attribute_entities_table'; 
   
    private $item_model;
    private $category_model;

    public function __construct(){
        $item_model = config('attributes.entities.item');
        $category_model = config('attributes.entities.category');
    }
    public function items(){
        return $this->morphedByMany($item_model,'entity_id');  
    }

    public function categories(){
        return $this->morphedByMany($item_category,'entity_id');  
    }
}

?>