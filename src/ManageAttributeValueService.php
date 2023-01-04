<?php
namespace BardSoftware\LaravelAttributes;

use App\Models\AttributeValue;
use App\Models\ValueEntity;

class ManageAttributeValueService{

    public function addAttributeValue($title,$attribute_id){
        return AttributeValue::create(['title' => $title, 'attribute_id' => $attribute_id]);
    }
    
    public function editAttributeValue($value_id,$key,$value){
        AttributeValue::where('id',$attribute_id)->update([$attribute_key => $attribute_value]);
        return AttributeValue::where('id',$attribute_id)->first();

    }

    public function findAttributeValue($title){
        return AttributeValue::where('title','LIKE',"%$title%")->get();
    }

    public function listAttributeValue($page){
        return AttributeValue::skip( ($page - 1) * 10 )->take(10)->get();
    }

    public function getValuesByAttribute($attribute_id){
        return AttributeValue::where('attribute_id',$attribute_id)->get();
    }

    public function getValuesByEntity($entity_id){
        return ValueEntity::where('entity_id',$entity_id)->get();
    }

    public function attachToAttribute($value_id,$attribute_id){
        $query = AttributeValue::where('id',$value_id);
        $query->update(['attribute_id' => $attribute_id]);
        return $query->first();
    }

    public function detachFromAttribute($attribute_id){
        
    }
}

?>