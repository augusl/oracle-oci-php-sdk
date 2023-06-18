<?php

namespace Augusl\OCI\services\core\datatypes;

use Augusl\OCI\contract\DataTypes;

class Metadata extends DataTypes
{
    private $items;

    public function setItem($key, $val)
    {
        $this->items[$key] = $val;
    }

    public function toArray()
    {
        return $this->items;
    }

    public function fromArray(array $data, $property = null)
    {
        foreach ($data as $key => $item) {
            $this->setItem($key, $item);
        }
    }
}
