<?php
namespace BardSoftware\LaravelAttributes;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\AttributeEntity;

class ManageAttributesService{

    public function addAttribute($attribute_title,$attribute_slug,$attribute_type){
        return Attribute::create(['title' => $attribute_title, 'slug' => $attribute_slug, 'type' => $attribute_type]);
    }

    public function editAttribute($attribute_id,$attribute_key,$attribute_value){
        Attribute::where('id',$attribute_id)->update([$attribute_key => $attribute_value]);
        return Attribute::where('id',$attribute_id)->first();
    }   

    public function findAttribute($title){
        return Attribute::where('title','LIKE',"%$title%")->get();
    }

    public function listAttributes($page){
        return Attribute::skip( ($page - 1) * 10 )->take(10)->get();
    }

    public function getAttributesByEntity($entity_id){
        $attribute_ids = AttributeEntity::where('entity_id',$entity_id)->get()->only('attribute_id');
        return Attribute::whereIn('id',$attribute_ids)->get();
    }

    public function attachToEntity($attribute_id,$entity_id,$entity_type){
        return AttributeEntity::create(
            [
                'attribute_id' => $attribute_id, 
                'entity_id' => $entity_id , 
                'entity_type' => $entity_type
            ]
        );
    }

    public function detachFromEntity($attribute_id,$entity_id){
        return AttributeEntity::where('attribute_id',$attribute_id)->where('entity_id',$entity_id)->delete();
    }

}

?>