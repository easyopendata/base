<?php
/**
 * Created by PhpStorm.
 * User: keanor
 * Date: 20.04.16
 * Time: 20:53
 */
namespace EasyOpenData\Package\Base;

/**
 * Interface CollectionInterface
 * @package EasyOpenData\Package
 */
interface CollectionInterface
{
    /**
     * @return EntityInterface[]
     */
    public function getEntities();
}
