<?php
/**
 * Class DI
 */
class DI
{
    private $registry = array();

    /**
     * @param $name
     * @param $resolver
     */
    public function __set($name, $resolver)
    {
        $this->registry[$name] = $resolver;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->registry[$name]();
    }
}