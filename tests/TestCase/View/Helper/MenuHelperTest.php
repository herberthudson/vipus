<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\MenuHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\MenuHelper Test Case
 */
class MenuHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\MenuHelper
     */
    public $Menu;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Menu = new MenuHelper($view);

        $this->Menu->request->params = ['controller' => 'Pages', 'action' => 'display'];
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MenuHelper);

        parent::tearDown();
    }

    /**
     * Test checkController method
     *
     * @return void
     */
    public function testCheckController()
    {
        // TODO: trigger controller route
        $expected = 'active';
        $result = $this->Menu->checkController(['Pages']);

        $this->assertEquals($expected, $result);

        $expected = '';
        $result = $this->Menu->checkController(['WrongController']);
        $this->assertEquals($expected, $result);
    }

    /**
     * Test checkAction method
     *
     * @return void
     */
    public function testCheckAction()
    {
        // TODO: trigger controller and action 
        $expected = 'active';
        $result = $this->Menu->checkAction('Pages', 'display');

        $this->assertEquals($expected, $result);

        $expected = '';
        $result = $this->Menu->checkAction('WrongController', 'WrongAction');

        $this->assertEquals($expected, $result);
    }
}
