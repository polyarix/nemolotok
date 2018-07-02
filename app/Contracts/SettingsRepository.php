<?php

namespace App\Contracts;

interface SettingsRepository
{
    public function all();
    public function update($data);
    public function productImageSizes() : array;
}