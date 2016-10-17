<?php
/**
 * Copyright (c) new frontiers Software GmbH
 */

namespace NewFrontiers\Breeze;

class SaveResult
{

    public $entities;

    public $keyMappings;

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
}
