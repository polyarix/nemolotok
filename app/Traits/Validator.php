<?php

namespace App\Traits;

trait Validator
{
    protected function hasErrors($data, $id = false)
    {
        $validation = \Validator::make($data->all(), $this->rules($id));
        if($validation->fails()) {
            return $data = [
                'status' => 'error',
                'error' => $validation->errors()
            ];
        }

        return false;
    }

    protected function rules($id = false)
    {
//        if($id){
//            $this->validation_rules['name'] = $this->validation_rules['name'].',id,'.$id;
//        }

        return $this->validation_rules;
    }
}