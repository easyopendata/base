<?php
/**
 * Created by PhpStorm.
 * User: keanor
 * Date: 20.04.16
 * Time: 20:32
 */
namespace EasyOpenData\Package\Base;

use EasyOpenData\Expression;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface ProtocolInterface
 *
 * Интерфейс для протокола
 *
 * @package EasyOpenData
 */
interface ProtocolInterface
{
    /**
     * @param RequestInterface $request
     *
     * @return Expression\Collection
     */
    public function getExpressions(RequestInterface $request);

    /**
     * @param CollectionInterface $collection
     *
     * @return ResponseInterface
     */
    public function getResponse(CollectionInterface $collection);
}
