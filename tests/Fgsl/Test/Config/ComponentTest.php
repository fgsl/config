<?php
/**
 * Fgsl Config - a component for reading configurations
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/config for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Test\Config;

use Fgsl\Config\Config;
/**
 * 
 * @package    Fgsl
 * @subpackage Test
 */
class ComponentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Ensures that config instance needs no data
     */
    public function testVoidConfig()
    {
        $config = new Config();
        $this->assertEmpty($config->getArrayCopy());
    }

    /**
     * Ensures that constructor is working
     */
    public function testFilledConfig()
    {
        $config = new Config(array(
                'firstNephew' => 'Hugh',
                'SecondNephew' => 'Louis',
                'ThirdNephew' => 'Dewey'
        ));
        $this->assertEquals('3',count($config->getArrayCopy()));
    }

    /**
     * Ensures that a key is correctly added 
     */
    public function testHasKey()
    {
        $config = new Config();
        $config->name = 'John';
        $data = $config->getArrayCopy();
        $this->assertArrayHasKey('name', $data);
        $this->assertEquals('John', $data['name']);

        $config->set('address','Eastside Street');
        $this->assertEquals('Eastside Street', $config->address);
        $this->assertEquals('Eastside Street', $config->get('address'));
    }
}