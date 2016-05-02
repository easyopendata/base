<?php
/**
 * Created by PhpStorm.
 * User: keanor
 * Date: 20.04.16
 * Time: 20:37
 */

namespace EasyOpenData\Package\Base;

/**
 * Interface Package
 *
 * Сущность пакета
 *
 * @package EasyOpenData\Package
 */
interface PackageInterface
{
    /**
     * @return ProtocolInterface
     */
    public function getProtocol();

    /**
     * @return MapperInterface
     */
    public function getMapper();
}
