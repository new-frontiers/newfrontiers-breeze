<?php
/**
 * Copyright (c) new frontiers Software GmbH
 */

namespace NewFrontiers\Breeze;

class ComplexType
{

    /** @var string */
    public $shortName;

    /** @var string */
    public $namespace;

    /** @var bool */
    public $isComplexType = true;

    /** @var DataProperty[] */
    public $dataProperties = [];

    /**
     * @return DataProperty
     */
    public function addDataProperty()
    {
        $result = new DataProperty();
        $this->dataProperties[] = $result;
        return $result;
    }
}
