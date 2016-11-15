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
 * Auth helper
 */
class AuthHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * Return session value
     *
     * @param type String|Null
     * @return return String|NULL
     */
    public function user($value='')
    {
        switch ($value) {
            case 'username':
                return $this->request->session()->read('Auth.User.username');
                break;
            case 'role':
                return $this->request->session()->read('Auth.User.role');
                break;
            case 'created':
                return $this->request->session()->read('Auth.User.created');
                break;
            case 'modified':
                return $this->request->session()->read('Auth.User.modified');
                break;
            case 'name':
                return $this->request->session()->read('Auth.User.profile.name');
                break;
            case 'full_name':
                return $this->request->session()->read('Auth.User.profile.name') . ' ' . $this->request->session()->read('Auth.User.profile.surname'); ;
                break;
            case 'photo':
                $photo = $this->request->session()->read('Auth.User.profile.dir') . $this->request->session()->read('Auth.User.profile.photo');
                if ($photo) {
                    return $this->Url->image($photo);
                }else {
                    return "";
                }
                break;
            default:
                return NULL;
                break;
        }
    }

}
