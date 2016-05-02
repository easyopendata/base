<?php
/**
 * Created by PhpStorm.
 * User: keanor
 * Date: 20.04.16
 * Time: 20:34
 */
namespace EasyOpenData\Package\Base;

/**
 * Interface UpdaterInterface
 *
 * Интерфейс для сервиса обновления данных
 *
 * @package EasyOpenData
 */
interface UpdaterInterface
{
    /**
     * Метод для проведения обновления
     *
     * @return void
     */
    public function update();

    /**
     * Метод для проверки наличия обновления
     *
     * @return boolean
     */
    public function hasUpdate();
}
