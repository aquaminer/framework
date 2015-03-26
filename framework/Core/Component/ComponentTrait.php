<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 * @copyright ©2009-2015
 */
namespace Spiral\Core\Component;

use Spiral\Core\Container;
use Spiral\Core\CoreException;

trait ComponentTrait
{
    /**
     * Component alias name should be used for logger chanel and other operations.
     *
     * @return string
     */
    public static function getAlias()
    {
        return get_called_class();
    }

    /**
     * Create or retrieve component instance using IoC container. This method can return already
     * existed instance of class if that instance were defined as singleton and binded in core under
     * same class name. Using binding mechanism target instance can be redefined to use another
     * declaration. Be aware of that.
     *
     * @param array $parameters Named parameters list to use for instance constructing.
     * @return static
     * @throws CoreException
     */
    public static function make($parameters = array())
    {
        return Container::get(get_called_class(), $parameters);
    }
}