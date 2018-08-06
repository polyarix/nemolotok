<?php

namespace App\Services;

use App\Contracts\AttributeRepository;
use App\Traits\Validator;

class AttributeService
{
    use Validator;
    protected $attributeRepository;
    protected $validation_rules;

    public function __construct(AttributeRepository $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }

    public function getAllAttributes()
    {
        return $this->attributeRepository->all();
    }
}