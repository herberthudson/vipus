<?php
/**
 * VipUS: Admin for sale vips services
 * Copyright (c) Herbert Hudson (https://github.com/herberthudson/VipUS)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Herbert Hudson (https://github.com/herberthudson/VipUS)
 * @license       MIT License
 */
?>
<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Menu helper
 */
class MenuHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function checkController($controllers)
    {
      // check if controller matchs
      $active = (in_array($this->request->param('controller'), $controllers)) ? 'active' : '';

      return $active;

    }

    public function checkAction($controller, $action)
    {
      $active = ($controller == $this->request->param('controller') && $action == $this->request->param('action') ? 'active' : '');

      return $active;
    }
}
