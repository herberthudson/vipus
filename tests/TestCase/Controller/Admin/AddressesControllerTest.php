<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\AddressesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\AddressesController Test Case
 */
class AddressesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.addresses',
        'app.profiles',
        'app.users',
        'app.orders',
        'app.products',
        'app.services',
        'app.images',
        'app.images_products',
        'app.orders_products',
        'app.phones'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
