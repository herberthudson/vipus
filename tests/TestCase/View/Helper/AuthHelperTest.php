<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\AuthHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\AuthHelper Test Case
 */
class AuthHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\AuthHelper
     */
    public $Auth;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Auth = new AuthHelper($view);

        $this->session = $this->getMockBuilder('Cake\Network\Session')
            ->setMethods(['read'])
            ->getMock();

        $this->Auth->request = $this->getMockBuilder('Cake\Network\Request')
            ->setMethods(['session'])
            ->getMock();

    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Auth);

        parent::tearDown();
    }

    public function testGetUsernameFromUserMethod()
    {
        
        $this->session->expects($this->at(0))
            ->method('read')
            ->with('Auth.User.username')
            ->will($this->returnValue('herbert'));
        
        $this->Auth->request->expects($this->any())
            ->method('session')
            ->will($this->returnValue($this->session));

        $expected = 'herbert';
        $result = $this->Auth->user('username');

        $this->assertEquals($expected, $result);
    }

    public function testGetRoleFromUserMethod()
    {
        $this->session->expects($this->at(0))
            ->method('read')
            ->with('Auth.User.role')
            ->will($this->returnValue('client'));
        
        $this->Auth->request->expects($this->any())
            ->method('session')
            ->will($this->returnValue($this->session));

        $expected = 'client';
        $result = $this->Auth->user('role');

        $this->assertEquals($expected, $result);
    }

    public function testGetCreatedFromUserMethod()
    {
        $this->session->expects($this->at(0))
            ->method('read')
            ->with('Auth.User.created')
            ->will($this->returnValue('0000-00-00 00:00:00'));
        
        $this->Auth->request->expects($this->any())
            ->method('session')
            ->will($this->returnValue($this->session));

        $expected = '0000-00-00 00:00:00';
        $result = $this->Auth->user('created');

        $this->assertEquals($expected, $result);
    }

    public function testGetModifiedFromUserMethod()
    {
        $this->session->expects($this->at(0))
            ->method('read')
            ->with('Auth.User.modified')
            ->will($this->returnValue('0000-00-00 00:00:00'));
        
        $this->Auth->request->expects($this->any())
            ->method('session')
            ->will($this->returnValue($this->session));

        $expected = '0000-00-00 00:00:00';
        $result = $this->Auth->user('modified');

        $this->assertEquals($expected, $result);
    }

    public function testGetNameFromUserMethod()
    {
        $this->session->expects($this->at(0))
            ->method('read')
            ->with('Auth.User.profile.name')
            ->will($this->returnValue('Herbert'));
        
        $this->Auth->request->expects($this->any())
            ->method('session')
            ->will($this->returnValue($this->session));

        $expected = 'Herbert';
        $result = $this->Auth->user('name');

        $this->assertEquals($expected, $result);
    }

    public function testGetFullNameFromUserMethod()
    {
        $this->session->expects($this->at(0))
            ->method('read')
            ->with('Auth.User.profile.name')
            ->will($this->returnValue('Herbert'));

        $this->session->expects($this->at(1))
            ->method('read')
            ->with('Auth.User.profile.surname')
            ->will($this->returnValue('Hudson'));
        
        $this->Auth->request->expects($this->any())
            ->method('session')
            ->will($this->returnValue($this->session));

        $expected = 'Herbert Hudson';
        $result = $this->Auth->user('full_name');

        $this->assertEquals($expected, $result);
    }

    public function testGetPhotoDirFromUserMethod()
    {
        $this->session->expects($this->at(0))
            ->method('read')
            ->with('Auth.User.profile.dir')
            ->will($this->returnValue(''));

        $this->session->expects($this->at(1))
            ->method('read')
            ->with('Auth.User.profile.photo')
            ->will($this->returnValue('user.png'));
        
        $this->Auth->request->expects($this->any())
            ->method('session')
            ->will($this->returnValue($this->session));

        $expected = DS . 'files' . DS . 'profiles' . DS . 'photo'. DS . 'default' . DS . 'user.png';
        $result = $this->Auth->user('photo');

        $this->assertEquals($expected, $result);
    }

    public function testGetEmptyPhotoDirFromUserMethod()
    {
        $this->session->expects($this->at(0))
            ->method('read')
            ->with('Auth.User.profile.dir')
            ->will($this->returnValue(''));

        $this->session->expects($this->at(1))
            ->method('read')
            ->with('Auth.User.profile.photo')
            ->will($this->returnValue('use.png'));
        
        $this->Auth->request->expects($this->any())
            ->method('session')
            ->will($this->returnValue($this->session));

        $expected = '';
        $result = $this->Auth->user('photo');

        $this->assertEquals($expected, $result);
    }

    public function testGetDefaultFromUserMethod()
    {
        
        $expected = NULL;
        $result = $this->Auth->user('wrongKey');

        $this->assertEquals($expected, $result);
    }
}
