<?php
/**
 * Copyright (c) new frontiers Software GmbH
 */

namespace NewFrontiers\Breeze;

class DataProperty
{

    public $name;

    public $dataType = 'String';

    public $maxLength = 0;

    public $isPartOfKey = false;

    public $validators = [];
}
