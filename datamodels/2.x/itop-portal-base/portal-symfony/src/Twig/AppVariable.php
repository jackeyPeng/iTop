<?php
/**
 * Created by Bruno DA SILVA, working for Combodo
 * Date: 30/01/19
 * Time: 16:38
 */

namespace Combodo\iTop\Portal\Twig;

use Symfony\Bridge\Twig\AppVariable as DecoratedAppVariable;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AppVariable implements \ArrayAccess, ContainerAwareInterface
{
    /** @var ContainerInterface */
    private $container;

    /** @var DecoratedAppVariable */
    private $decorated;


    public function __construct(DecoratedAppVariable $decorated)
    {
        $this->decorated = $decorated;
    }

    public function __call($name, $arguments)
    {
        if ($this->silexApplicationEmulation->offsetExists($name)) {
            return $this->silexApplicationEmulation->offsetGet($name);
        }

//        return call_user_func_array([$this->decorated, $name], $arguments);

        return $this->decorated->$name(...$arguments);//WARNING: use of http://php.net/manual/fr/functions.arguments.php#functions.variable-arg-list
    }


    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Whether a offset exists
     * @link  https://php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param mixed $offset <p>
     *                      An offset to check for.
     *                      </p>
     *
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset)
    {
        if ($this->container->hasParameter($offset)) {
            return true;
        }
        if ($this->container->has($offset)) {
            return true;
        }

        return false;
    }

    /**
     * Offset to retrieve
     * @link  https://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $offset <p>
     *                      The offset to retrieve.
     *                      </p>
     *
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        if ($this->container->hasParameter($offset)) {
            return $this->container->getParameter($offset);
        }
        if ($this->container->has($offset)) {
            return $this->container->get($offset);
        }

        return;
    }

    /**
     * Offset to set
     * @link  https://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param mixed $offset <p>
     *                      The offset to assign the value to.
     *                      </p>
     * @param mixed $value  <p>
     *                      The value to set.
     *                      </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {

        if ($this->container->hasParameter($offset)) {
            $this->container->setParameter($offset, $value);
            return;
        }

        if ($this->container->has($offset)) {
            $this->container->set($offset, $value);
            return;
        }

        if (is_object($value)) {
            $this->container->set($offset, $value);
            return;
        }

        $this->container->setParameter($offset, $value);
        return;
    }

    /**
     * Offset to unset
     * @link  https://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param mixed $offset <p>
     *                      The offset to unset.
     *                      </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset){
        if ($this->container->hasParameter($offset)) {
            $this->container->setParameter($offset, null);
            return;
        }

        if ($this->container->has($offset)) {
            $this->container->set($offset, null);
            return;
        }
    }

}