<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Di\Definition\Builder;

/**
 * Definitions for an injection endpoint method
 */
class InjectionMethod
{
    /**
     * @var string|null
     */
    protected $name = null;

    /**
     * @var array
     */
    protected $parameters = array();

    /**
     * @param  string|null $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  string          $name
     * @param  string|null     $class
     * @param  mixed|null      $isRequired
     * @param  mixed|null      $default
     * @return InjectionMethod
     */
    public function addParameter($name, $class = null, $isRequired = null, $default = null)
    {
        $this->parameters[] = array(
            $name,
            $class,
            ($isRequired == null) ? true : false,
            $default,
        );

        return $this;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}
