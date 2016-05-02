<?php
/**
 * Created by PhpStorm.
 * User: keanor
 * Date: 29.04.16
 * Time: 20:09
 */

namespace EasyOpenData\Package\Base;

/**
 * Interface InstallerInterface
 * @package EasyOpenData\Package
 */
interface InstallerInterface
{
    /**
     * @param MapperInterface[] $mappers
     * @return void
     */
    public function setMappers(array $mappers);

    /**
     * Метод для первоначальной загрузки данных
     *
     * @return void
     */
    public function install();
}
