<?php
/**
 * Created by PhpStorm.
 * User: keanor
 * Date: 20.04.16
 * Time: 20:33
 */
namespace EasyOpenData\Package\Base;

use EasyOpenData\Expression;

/**
 * Interface MapperInterface
 *
 * Интерфейс для мапперов
 *
 * @package EasyOpenData
 */
interface MapperInterface
{
    /**
     * @param AdapterInterface $adapter
     * 
     * @return string
     */
    public function setAdapter(AdapterInterface $adapter);

    /**
     * @param Expression\Collection $collection
     * 
     * @return CollectionInterface
     */
    public function getData(Expression\Collection $collection);

    /**
     * Метод для сохранения сущности
     *
     * @param EntityInterface $entity
     *
     * @return void
     */
    public function saveEntity(EntityInterface $entity);
}
