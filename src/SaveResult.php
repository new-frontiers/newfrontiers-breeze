<?php
/**
 * Copyright (c) new frontiers Software GmbH
 */

namespace NewFrontiers\Breeze;

class SaveResult
{

    public $entities = [];

    public $keyMappings = [];

    public $deletedKeys = [];

    public function addEntity($entity)
    {
        $this->entities[] = $entity;
        return $this;
    }

    public function addKeyMapping(KeyMapping $keyMapping)
    {
        $this->keyMappings[] = $keyMapping;
        return $this;
    }

    public function addDeletedKey($entityTypeName, $keyValue)
    {
        $deletedKey = new DeletedKey();
        $deletedKey->entityTypeName = $entityTypeName;
        $deletedKey->keyValue = $keyValue;
        $this->deletedKeys[] = $deletedKey;
        return $this;
    }
}
