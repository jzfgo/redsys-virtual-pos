<?php
/**
 * Redsys Virtual POS
 *
 * @package    Redsys Virtual POS
 * @author     Javier Zapata <javierzapata82@gmail.com>
 * @copyright  2021 Javier Zapata <javierzapata82@gmail.com>
 * @license    https://opensource.org/licenses/MIT The MIT License
 * @link       https://github.com/bahiazul/redsys-virtual-pos
 */

namespace Bahiazul\RedsysVirtualPos\Field;

/**
 * Holds the value of a request/response parameter
 *
 * @package    Redsys Virtual POS
 * @author     Javier Zapata <javierzapata82@gmail.com>
 * @copyright  2021 Javier Zapata <javierzapata82@gmail.com>
 * @license    https://opensource.org/licenses/MIT The MIT License
 * @link       https://github.com/bahiazul/redsys-virtual-pos
 */
interface FieldInterface
{
    /**
     * @param mixed $value
     */
    public function __construct($value = null);

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getRequestName();

    /**
     * @return string
     */
    public function getResponseName();

    /**
     * @param mixed $value The value of the field
     * @return FieldInterface
     */
    public function setValue($value);

    /**
     * @return string
     */
    public function getValue();
}
