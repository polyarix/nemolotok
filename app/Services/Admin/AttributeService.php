<?php

namespace App\Services;

use App\Contracts\AttributeRepository;
use App\Traits\Validator;

class AttributeService
{
    use Validator;
    protected $attributeRepository;
    protected $validation_rules = [
        'name' => 'required|min:3|max:50|string|unique:attributes'
    ];

    public function __construct(AttributeRepository $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }

    public function getAllAttributes()
    {
        return $this->attributeRepository->all();
    }

    public function createAttribute($data)
    {
        if($errors = $this->hasErrors($data)) return $errors;

        return $this->attributeRepository->create($data);
    }

    public function getAttributeById(int $id)
    {
        return $this->attributeRepository->get($id);
    }

    public function updateAttribute(int $id, $data)
    {
        if($errors = $this->hasErrors($data,$id)) return $errors;

        return $this->attributeRepository->update($id, $data);
    }

    public function deleteAttribute(int $id)
    {
        return $this->attributeRepository->delete($id);
    }
}