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
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;

/**
 * Profiles Controller
 *
 * @property \App\Model\Table\ProfilesTable $Profiles
 */
class ProfilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->setAction('view');
    }

    /**
     * View method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        // TODO: improve this method to prevent user to see other profile
        $id = $this->request->session()->read('Auth.User.profile.id');
        $profile = $this->Profiles->get($id, [
            'contain' => ['Users', 'Addresses', 'Phones']
        ]);

        $this->set('profile', $profile);
        $this->set('_serialize', ['profile']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    // public function add()
    // {
    //     $profile = $this->Profiles->newEntity();
    //     if ($this->request->is('post')) {
    //         $profile = $this->Profiles->patchEntity($profile, $this->request->data);
    //         if ($this->Profiles->save($profile)) {
    //             $this->Flash->success(__('The profile has been saved.'));
    //
    //             return $this->redirect(['action' => 'index']);
    //         } else {
    //             $this->Flash->error(__('The profile could not be saved. Please, try again.'));
    //         }
    //     }
    //     $users = $this->Profiles->Users->find('list', ['limit' => 200]);
    //     $this->set(compact('profile', 'users'));
    //     $this->set('_serialize', ['profile']);
    // }

    /**
     * Edit method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->set('form_templates', Configure::read('Templates'));
        // TODO: improve this method to prevent user to edit other profile
        $id = $this->request->session()->read('Auth.User.profile.id');
        $profile = $this->Profiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profile = $this->Profiles->patchEntity($profile, $this->request->data);
            if ($this->Profiles->save($profile)) {
                // TODO: change default image and flash message if user upload image
                $this->Flash->success(__('The profile has been saved. If you change your photo, please sign out and sign in to see your changers'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The profile could not be saved. Please, try again.'));
            }
        }
        $users = $this->Profiles->Users->find('list', ['limit' => 200]);
        $this->set(compact('profile', 'users'));
        $this->set('_serialize', ['profile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Profile id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profile = $this->Profiles->get($id);
        if ($this->Profiles->delete($profile)) {
            $this->Flash->success(__('The profile has been deleted.'));
        } else {
            $this->Flash->error(__('The profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
