<?php
/**
 * Created by PhpStorm.
 * User: keanor
 * Date: 29.04.16
 * Time: 21:03
 */
namespace EasyOpenData\Package\Base;

use EasyOpenData\Expression;

/**
 * Class AdapterInterface
 * @package EasyOpenData\Package\Mapper
 */
interface AdapterInterface
{
    /**
     * Установка параметров
     *
     * @param array $options
     *
     * @return void
     */
    public function setOptions(array $options);

    /**
     * Поиск
     *
     * @param Expression\Collection $where
     *
     * @return EntityInterface[]
     */
    public function search(Expression\Collection $where);

    /**
     * Сохранение сущности
     *
     * @param EntityInterface $entity
     *
     * @return void
     */
    public function save(EntityInterface $entity);

    /**
     * Получение сущности по ID
     *
     * @param mixed $id
     * @param EntityInterface $entity
     *
     * @return EntityInterface
     */
    public function get($id, EntityInterface $entity);
}
