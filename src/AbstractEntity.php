<?php
/**
 * Created by PhpStorm.
 * User: keanor
 * Date: 24.04.16
 * Time: 20:29
 */

namespace EasyOpenData\Package\Base;

/**
 * Class AbstractEntity
 * @package EasyOpenData\Package
 */
abstract class AbstractEntity implements EntityInterface
{
    /**
     * @return string
     */
    abstract public function getPrimaryFieldName();

    /**
     * @param array $data
     * @return void
     */
    public function setFromArray(array $data)
    {
        // TODO: Implement setFromArray() method.
    }

    /**
     * @return array
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}
