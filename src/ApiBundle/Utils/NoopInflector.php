<?php
/**
 * Created by PhpStorm.
 * User: florian.saleur
 * Date: 28/11/18
 * Time: 10:51
 */

namespace ApiBundle\Utils;


use FOS\RestBundle\Inflector\InflectorInterface;

class NoopInflector implements InflectorInterface
{
    /**
     * Don't pluralize strategy
     *
     * @param $word
     * @return mixed
     */
    public function pluralize($word)
    {
        return $word;
    }
}
