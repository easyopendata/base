<?php
/**
 * Created by PhpStorm.
 * User: keanor
 * Date: 20.04.16
 * Time: 20:31
 */
namespace EasyOpenData\Package\Base;

/**
 * Interface EntityInterface
 *
 * Интерфейс для модели с данными
 *
 * @package EasyOpenData
 */
interface EntityInterface
{
    /**
     * @param array $data
     * @return void
     */
    public function setFromArray(array $data);

    /**
     * @return array
     */
    public function getArrayCopy();
}
