<?php

namespace App\Interfaces;


interface PropertyRepositoryInterface
{

    public function getAllProperties();
    public function getPropertyById($id);
    public function saveProperty($property);
    public function deleteProperty($id);
    public function updateProperty($id, $property);
}
