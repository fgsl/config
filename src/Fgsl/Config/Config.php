<?php
/**
 * Fgsl Config - a component for reading configurations
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/config for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Config;

/**
 * 
 * @package    Fgsl
 * @subpackage Config
 */
class Config
{
    /**
     * config map
     * @var array
     */
    protected $data = array();

    /**
     * 
     * @param array $input
     */
    public function __construct(array $input = array())
    {
        $this->data = $input;
    }

    /**
     * 
     * @param array $input
     */
    public function exchangeArray(array $input)
    {
        $this->data = $input;
    }

    /**
     * @return array
     */
    public function getArrayCopy()
    {
        return $this->data;
    }

    /**
     * @param string $key
     */
    public function __get($key)
    {
        return $this->data[$key];
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * @param string $key
     */
    public function get($key)
    {
        return $this->data[$key];
    }

    /**
     * @param string $key
     * @param mixed $value
     */
    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }
}