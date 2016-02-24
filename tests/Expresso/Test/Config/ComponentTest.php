<?php
/**
 * Expresso Skeleton Component - a basic structure for Expresso components
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 * @link      https://gitlab.com/expresso_livre/expresso for the canonical source repository
 * @copyright Copyright (c) 2016 SERPRO (http://www.serpro.gov.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Expresso\Test\Config;

use Expresso\Config\Config;
/**
 * 
 * @package    Expresso
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